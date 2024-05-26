<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use App\User;
use Carbon\carbon;
use Illuminate\Support\Str;

class ResetController extends Controller
{
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
      $nomor = ModelsUser::where('phone', $request->nomer)->get();
      foreach ($nomor as $value) {
        if ($value->phone != NULL) {
          $reset = ModelsUser::where('phone',$request->nomer)->first();
          $reset->updated_at = Carbon::now();
          $reset->password = bcrypt($str);
          $reset->save();
          // If nomor available
          curl_exec($curl);
          return redirect('/');
        }
      }
      // If nomor not found
      return redirect('/reset-password');
    }
    // Get Random Data
    function str()
    {
      $get = Str::random(12);
      return $get;
    }
}
