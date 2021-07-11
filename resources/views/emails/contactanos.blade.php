<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:blueviolet;
        }
    </style>
    
</head>
<body>
   <h1>Requerimiento de información sobre un curso de Cisco</h1>
   
  
<p> <strong>Nombre : </strong>{{$contacto['name']}}</p>
<p> <strong>Correo : </strong>{{$contacto['correo']}}</p>
<p> <strong>Telefono : </strong>{{$contacto['phone-number']}}</p>
<p> <strong>Curso consultado : </strong>{{$contacto['mensaje']}}</p>


</body>
</html>