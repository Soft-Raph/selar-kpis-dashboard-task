<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite('resources/css/app.css')
    </head>
    <body>
    <div class="m-6 bg-gray-100 rounded-xl p-2">
        <img src="{{ url('selar-logo.png') }}" width="100px" alt="logo" class="mx-auto">
        <div align="center" class="container md:w-4/5 xl:w-3/5  mx-auto px-2">

            <div class="my-5 rounded-xl bg-purple-900 text-white text-left divide-y-2 divide-solid divide-white">
                <p class="p-2 flex justify-center">
                    Key Performance Indicator (KPIS) Dashboard task
                </p>
            </div>
            <div class="text-lg">
                <b>FILTER: </b>{{ $from }} <b>TO</b> {{ $to }} ({{ $diffHumans }})
            </div>
            <form action="" method="get">
                <div class="flex flex-wrap justify-center">
                    <div class="px-3 pt-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Start Date
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="from" placeholder="yyyy-mm-dd" value="{{ $from }}">
                    </div>
                    <div class="px-3 pt-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            End Date
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="to" placeholder="yyyy-mm-dd" value="{{ $to }}">
                    </div>
                    <div class="w-full px-3">
                        <br>
                        <button
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-900 border border-transparent rounded-lg active:bg-purple-900 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                            Filter Data
                        </button>
                    </div>
                </div>
            </form>
            <hr class="border-2 my-4 border-purple-900"/>

            <div class="grid gap-10 my-8">
                <div class="flex flex-wrap">

                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-2">
                                New users
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $users->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="py-2 px-3">
                        <div class="flex justify-start">
                            <div  class="py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-2">
                                New Products
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $products->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-2">
                                Unique Sellers
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $unique_merchants->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </div>
                            <div class="text-lg font-bold p-2">
                                Unique Merchants
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $unique_merchants->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-2">
                                New Merchants
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $new_merchants->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-2">
                                New Sellers
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Total Number: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ $new_sellers->count() }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div  class="py-2 px-3">
                        <div class="flex justify-start">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="text-lg font-bold p-1">
                                Average in NGN of merchant's sales
                            </div>
                        </div>
                        <div class="text-left">
                            <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="text-sm font-semibold">Average: </dt>
                                    <dd class="uppercase text-xs sm:text-sm font-bold tracking-wide">{{ number_format($average, 2) }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-start">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-900 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="text-2xl font-bold p-2">
                            Purchases volume
                        </div>
                    </div>
                    <div class="text-left">
                        <dl class="duration-1500 delay-500 flex flex-wrap divide-y divide-gray-200 border-b border-gray-200">
                            <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                <dt class="w-2/5 sm:w-1/3 flex-none uppercase text-xs sm:text-sm font-semibold tracking-wide">Currency</dt>
                                <dt class="w-2/5 sm:w-1/3 flex-none uppercase text-xs sm:text-sm font-semibold tracking-wide">Sales</dt>
                                <dd class="uppercase text-xs sm:text-sm font-semibold tracking-wide">Profit</dd>
                            </div>
                            @forelse($purchases as $purchase)
                                <div class="w-full flex-none flex items-baseline px-4 sm:px-6 py-4">
                                    <dt class="w-2/5 sm:w-1/3 flex-none uppercase text-xs sm:text-sm font-semibold tracking-wide">{{ $purchase->cur }}</dt>
                                    <dt class="w-2/5 sm:w-1/3 text-black text-sm sm:text-base">{{ number_format($purchase->total_amount, 2) }} </dt>
                                    <dd class="text-black text-sm sm:text-base"><b>{{ number_format($purchase->profit,2) }}</b></dd>
                                </div>
                            @empty
                                No Data
                            @endforelse
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
