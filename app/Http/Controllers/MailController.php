<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Redirect;
use Session;
use App\Http\Requests\ContactRequest;
use Validator;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {



      Mail::to("contacto@agroqlik.cl")->send(new ContactMail($request->input()));


      if (Mail::failures()) {
        Session::flash('danger','Error al enviar el formulario de contacto. Favor comunicarse directamente a contacto@agroqlik.cl');
        return redirect()->back();
      }
      else {
        Session::flash('success','Formulario enviado con exito. Nos comunicaremos con usted a la brevedad.');
        return redirect()->back();
      }


    }

}
