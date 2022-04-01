<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;



class PDFController extends Controller
{
 //envio de email configurado con mailtrap

    public function crear()
    {


        $name = $_POST['name_input'];
        $email = $_POST['email_input'];
        $phone = $_POST['phone_input'];
        $DNI = $_POST['DNI'];
        $plan = $_POST['plan_estudios_input'];
        $numCuenta = $_POST['numCuenta'];
        $dompdf = App::make("dompdf.wrapper");

        $metodo = "";
        $date = "";
        $tramo = "";
        $formacionPrevia = "";
        $objetivo = "";

        $fechaActual = date('d-m-Y');


        if(isset($_POST['pagoIntegro'])){
            $metodo = $_POST['pagoIntegro'];
            $date = $fechaActual;
            $tramo = 'Pago íntegro';
        }

        if(isset($_POST['financiacion'])){
            $metodo = $_POST['financiacion'];
            $date = $_POST['dateI'];
            $tramo = $_POST['cuotaTramo'];
        }

        if(isset($_POST['formacion_previa_input'])){
            $formacionPrevia = $_POST['formacion_previa_input'];
        }

        if(isset($_POST['objetivo_input'])){
            $objetivo = $_POST['objetivo_input'];
        }


        $dompdf->loadView("pdf", [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "plan" => $plan,
            "metodo" => $metodo,
            "date" => $date,
            "tramo" => $tramo,
            "DNI" => $DNI,
            "numCuenta" => $numCuenta,
            "formacionPrevia" => $formacionPrevia,
            "objetivo" => $objetivo,
            "fechaActual"=>$fechaActual

        ]);

        $data= [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "plan" => $plan,
            "metodo" => $metodo,
            "date" => $date,
            "tramo" => $tramo,
            "DNI" => $DNI,
            "numCuenta" => $numCuenta,
            "formacionPrevia" => $formacionPrevia,
            "objetivo" => $objetivo,
            "fechaActual"=>$fechaActual,
            "title"=> 'Matrícula '.$plan,
            "emailEnvio" => 'direccionPrueba@gmail.com'


        ];

        Mail::send('pdf', $data, function ($message) use ($data, $dompdf) {
              $message->to($data["emailEnvio"], $data["emailEnvio"])
                ->subject($data["title"])
                ->attachData($dompdf->output(), "Matricula_pdf");
        });

        return $dompdf->stream();






    }
}