<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    //reset password
    public function reset_password()
    {
      return view('auth.reset-whatsapp');
    }

    // Proses Reset Password
    public function reset_password_proses(Request $request)
    {
      $curl = curl_init();
      $token = "K4YC8R_e6J8TWN57#6UA";
      $url = "https://fonnte.com/api/send_message.php";
      $date = Carbon::now();
      $str = $this->str();
      $pesan = 'Halo, ini adalah password Baru kamu ' .$str;
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
          'phone' => $request->nomer,
          'type' => 'text',
          'text' => $pesan
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: '.$token.''
        ),
      ));
      // cek nomor
      $nomor = Users::where('phone', $request->nomer)->get();
      foreach ($nomor as $value) {
        if ($value->phone != NULL) {
          $reset = Users::where('phone',$request->nomer)->first();
          $reset->updated_at = Carbon::now();
          $reset->password = bcrypt($str);
          $reset->save();
          // If nomor available
          curl_exec($curl);
          return redirect('/');
        }
      }
      // If nomor not found
      return redirect('/reset-password-whatsapp');
    }
    // Get Random Data
    function str()
    {
      $get = Str::random(12);
      return $get;
    }
}
