<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Styde\Html\Facades\Alert;

class ContactoController extends Controller
{
    public function enviar(Request $request){
        $secret = '6LdS_TQUAAAAAJfpc8Pq5IKnwcmcHWkiZBAfgfr0';
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if ($resp->isSuccess()){
            $this->validate($request,[
                'nombre'=>'required',
                'email'=>'required',
                'asunto'=>'required',
                'mensaje'=>'required',

            ]);

            Mail::to('redmexciteg@gmail.com')
                ->send(
                    new Contacto(
                        $request->nombre,
                        $request->email,
                        $request->asunto,
                        $request->mensaje
                    )
                );
            Alert::success('Tu mensaje ha sido enviado, gracias por contactar a la Red Mexciteg');
        }else{
            Alert::danger('Problemas con el Captcha')->items($resp->getErrorCodes());
        }

        return redirect()->back();
    }
}
