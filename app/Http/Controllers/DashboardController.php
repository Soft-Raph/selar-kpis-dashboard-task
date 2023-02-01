<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        $from = $request->has('from') ? Carbon::parse($request->from, 'UTC') : Carbon::now('UTC')->subWeek();
        $to = $request->has('to') ? Carbon::parse($request->to, 'UTC') : Carbon::now('UTC');
        $diffHumans = $from->diffForHumans($to);

        $users = User::all();
        $products = Product::all();
        $purchases = Purchase::query()->where('status','paid')
            ->selectRaw('SUM(totalamount) as total_amount')
            ->selectRaw('SUM(selar_profit) as profit')
            ->selectRaw('currency as cur')
            ->groupBy(['cur'])
            ->get();
        $unique_sellers = User::uniqueSellers($from, $to);
        $average = $this->getAverage($from, $to);
        $new_sellers = User::newSellers($from, $to);
        $new_merchants = User::newMerchants($from, $to);
        $unique_merchants = User::uniqueMerchants($from, $to);

        return view('dashboard', [
            'from' => $from,
            'to' => $to,
            'diffHumans' => $diffHumans,
            'users' => $users,
            'products' => $products,
            'purchases' => $purchases,
            'new_merchants' => $new_merchants,
            'unique_merchants' => $unique_merchants,
            'new_sellers' => $new_sellers,
            'unique_sellers' => $unique_sellers,
            'average' => $average
        ]);
    }

    /**
     * @param $from
     * @param $to
     * @return float|int
     */

    public function getAverage($from, $to): float|int
    {
        $purchases = Purchase::query()
            ->whereBetween('created_at', [$from, $to])
            ->where('status','paid')
            ->selectRaw('SUM(totalamount) as total_amount')
            ->selectRaw('SUM(selar_profit) as profit')
            ->selectRaw('currency as cur')
            ->groupBy(['cur'])
            ->get();
        $amt = 0;
        foreach($purchases as $purchase)
        {
            if ($purchase->cur == 'USD')
            {
                $conv = $this->convertCurrency('USD', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            elseif ($purchase->cur == 'GHS'){
                $conv = $this->convertCurrency('GHS', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            if ($purchase->cur == 'GBP')
            {
                $conv = $this->convertCurrency('GBP', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            elseif ($purchase->cur == 'KES')
            {
                $conv = $this->convertCurrency('KES', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            elseif ($purchase->cur == 'UGX')
            {
                $conv = $this->convertCurrency('UGX', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            elseif ($purchase->cur == 'ZAR')
            {
                $conv = $this->convertCurrency('ZAR', 'NGN');
                $amt += $purchase->total_amount * $conv;
            }
            else
            {
                $amt += $purchase->total_amount;
            }
        }

        return count($purchases) == 0 ? 0 : $amt/count($purchases);
    }

    /**
     * @param $old
     * @param $new
     * @return int|mixed
     */

    public function convertCurrency($old, $new): mixed
    {
        try {
            $apikey = 'Wk3sn25UQzGFaGv34jlKSbYIgylsu3pz';
            $from_Currency = urlencode($old);
            $to_Currency = urlencode($new);
            $response =Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'apikey' => $apikey,
            ])->get("https://api.apilayer.com/fixer/latest?base=$from_Currency&symbols=$to_Currency")->json();
            return $response['rate'][$to_Currency];
        }
        catch (\Exception $e)
        {
            Log::error($e->getMessage());
            return 0;
        }
    }
}
