<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'merchant_id', 'id');
    }

    /**
     * @return HasMany
     */

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class, 'merchant_id', 'id');
    }

    /**
     * @param $query
     * @param $from
     * @param $to
     * @return mixed
     */

    public function scopeUniqueMerchants($query, $from, $to)
    {
        return $query->whereHas('products',function ($products) use ($from, $to)
        {
            $products->whereBetween('created_at', [$from, $to]);
        },'>', 0)->get();
    }

    /**
     * @param $query
     * @param $from
     * @param $to
     * @return mixed
     */

    public function scopeNewSellers($query, $from, $to)
    {
        return $query->whereHas('purchases',function ($products) use ($from, $to)
        {
            $products->whereBetween('created_at', [$from, $to]);
        },'=', 1)->get();
    }

    /**
     * @param $query
     * @param $from
     * @param $to
     * @return mixed
     */
    public function scopeNewMerchants($query, $from, $to)
    {
        return $query->whereHas('products',function ($products) use ($from, $to)
        {
            $products->whereBetween('created_at', [$from, $to]);
        },'=', 1)->get();
    }

    /**
     * @param $query
     * @param $from
     * @param $to
     * @return mixed
     */
    public function scopeUniqueSellers($query, $from, $to)
    {
        return $query->whereHas('purchases',function ($products) use ($from, $to)
        {
            $products->whereBetween('created_at', [$from, $to]);
        },'>', 0)->get();
    }
}
