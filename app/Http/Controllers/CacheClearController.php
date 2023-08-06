<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class CacheClearController extends Controller
{
    public function clearCache()
    {
        Artisan::call('cache:clear');
        return 'Cache cleared successfully';
    }

    public function clearConfig()
    {
        Artisan::call('config:clear');
        return 'Configuration cache cleared successfully';
    }

    public function clearView()
    {
        Artisan::call('view:clear');
        return 'View cache cleared successfully';
    }

    public function clearRoute()
    {
        Artisan::call('route:clear');
        return 'Route cache cleared successfully';
    }

    public function clearOptimize()
    {
        Artisan::call('optimize:clear');
        return 'Optimization cache cleared successfully';
    }
}