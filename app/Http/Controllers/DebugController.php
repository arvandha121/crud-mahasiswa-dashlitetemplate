<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class DebugController extends Controller
{
    public function index()
    {
        $appDebug = config('app.debug');
        return view('admin.pengaturan.index', compact('appDebug'));
    }

    public function update(Request $request)
    {
        $newDebugValue = $request->input('app_debug') === 'true' ? 'true' : 'false';
        $envFile = app()->environmentFilePath();
        $envContents = file_get_contents($envFile);

        if ($newDebugValue === 'true') {
            $envContents = str_replace('APP_DEBUG=false', 'APP_DEBUG=true', $envContents);
        } else {
            $envContents = str_replace('APP_DEBUG=true', 'APP_DEBUG=false', $envContents);
        }

        file_put_contents($envFile, $envContents);

        Artisan::call('config:clear');
        return redirect()->route('debug.index');
    }
}
