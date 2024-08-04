<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden Numero {{$ordene->numero}}</title>
    <style>
        .body {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            color: #000;
            font-family: sans-serif;
        }

        p {
            margin-bottom: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class='body'>
        <h1 style="color: blue;">Orden actualizada correctamente </h1>
        <p>Estimado {{$ordene->destinatarioorden->nombre}} {{$ordene->destinatarioorden->apellido1}} {{$ordene->destinatarioorden->apellido2}}</p>
        <p>La orden numero {{$ordene->numero}} ha sido actualizada correctamente y se encutran en estado de {{$ordene->estado}}</p>
        <p>Recibira notificaciones a este medio cada vez que halla alguna actualizacion del estado de su orden</p>
        <p><strong>Utilice este codigo QR para facilitar la entrega de su orden</strong></p>
        <img src="{{$ordene->img}}" alt="qr">
        <img src="{{URL::asset('/storage/'.'/qrcode'.$ordene->numero.'.png')}}" alt="qr">
        <p><a href="{{route('ordenes.tracking', $ordene)}}">Ver estado de la orden</a></p>
        <p>Mucha Gracias</p>
    
    </div>
    
</body>
</html>