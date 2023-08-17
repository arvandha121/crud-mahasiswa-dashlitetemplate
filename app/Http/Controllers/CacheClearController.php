<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class CacheClearController extends Controller
{
    public function clearCache()
    {
        Artisan::call('cache:clear');
        return redirect()->back()->with('success', 'Cache cleared successfully');
    }

    public function clearConfig()
    {
        Artisan::call('config:clear');
        return redirect()->back()->with('success', 'Configuration cache cleared successfully');
    }

    public function clearView()
    {
        Artisan::call('view:clear');
        return redirect()->back()->with('success', 'View cache cleared successfully');
    }

    public function clearRoute()
    {
        Artisan::call('route:clear');
        return redirect()->back()->with('success', 'Route cache cleared successfully');
    }

    public function clearOptimize()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', 'Optimization cache cleared successfully');
    }

    public function refreshDatabase()
    {
        // Run the migrate:refresh and --seed command
        Artisan::call('migrate:refresh', ['--seed' => true]);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Database refreshed and seeded successfully.');
    }
}