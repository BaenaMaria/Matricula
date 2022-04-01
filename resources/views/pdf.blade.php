<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
{{-- <body>
    <h2>Nombre: {{$name}}</h2>
    <h2>DNI: {{$DNI}}</h2>
    <h2>Email: {{$email}}</h2>
    <h2>Phone: {{$phone}}</h2>
    <h2>Plan: {{$plan}}</h2>
    <h2>Método de pago: {{$metodo}}</h2>
    <h2>Fecha de incio: {{$date}}</h2>
    <h2>Tramo: {{$tramo}}</h2>
    <h2>Número de cuenta: {{$numCuenta}}</h2>
    <h2>Formación previa: {{$formacionPrevia}}</h2>
    <h2>Objetivo: {{$objetivo}}</h2>
</body> --}}

<body>
    {{-- <img style="position:left;top:0.21in;left:0.21in;width:8.59in;height:0.80in" src="{{asset('../images/ci_1.png')}}" />
    <img style="position:left;top:0.67in;left:4.60in;width:4.21in;height:0.34in" src="{{asset('../images/vi_1.png')}}" /> --}}
    <div style="position:center">
        <span style="font-style:normal;font-weight:normal;font-size:21pt;font-family:Helvetica;color:#12ccd1">
            FICHA DE MATRICULACIÓN:
        </span>
    </div>
    <br>
    <br>
    <div style="position:left;top:1.86in;left:0.44in;width:2.86in;line-height:0.31in;">
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
            DATOS PERSONALES
        </span>
    </div>
    <br>
    <div style="position:left;top:2.51in;left:0.48in;width:0.91in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            DNI o NIE:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $DNI }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:3.68in;left:0.48in;width:0.84in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Nombre:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $name }}
        </span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <div style="position:left;top:5.43in;left:0.48in;width:0.90in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Teléfono:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $phone }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:6.02in;left:0.48in;width:1.84in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Email:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $email }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:7.23in;left:0.44in;width:1.67in;line-height:0.31in;">
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
            MODALIDAD
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
        </span><br /></SPAN>
    </div>
    <div style="position:left;top:7.85in;left:0.44in;width:0.58in;line-height:0.20in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{$plan}}
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:8.84in;left:0.44in;width:2.50in;line-height:0.31in;">
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
            MÉTODO DE PAGO
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:9.46in;left:0.44in;width:1.16in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Tipo de pago:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $metodo }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:10.35in;left:0.44in;width:2.62in;line-height:0.20in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Fecha de inicio de financiación:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $date }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:10.71in;left:0.44in;width:1.88in;line-height:0.20in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Cuota de financiación:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $tramo }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:11.70in;left:0.44in;width:2.96in;line-height:0.31in;">
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
            DATOS FINANCIACIÓN
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:17pt;font-family:Helvetica;color:#00216a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:3.68in;left:0.48in;width:0.84in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Nombre:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $name }}
        </span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:2.51in;left:0.48in;width:0.91in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            DNI o NIE:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $DNI }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:2.51in;left:0.48in;width:0.91in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Número de cuenta
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{ $numCuenta }}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
    </div>
    <br>
    <div style="position:left;top:2.51in;left:0.48in;width:0.91in;line-height:0.19in;">
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
            Fecha de matriculación:
        </span>
        <span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br />
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{$fechaActual}}
        </span>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
        </span><br /></SPAN>
        <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#8d919a">
            {{$firma}}
        </span>
    </div>
</body>

<style>
    table {
        border-collapse: collapse;
    }

    table td {
        padding: 0px;
    }

</style>

</html>
