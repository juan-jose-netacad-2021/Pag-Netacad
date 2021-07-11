<head>
<script>
alert('Te estaremos redireccionando a la pagina de cisco');
function redireccionar(){window.location="http://academycisc.com.bo";}
setTimeout ("redireccionar()", 5000);
</script>
</head>
<body>
<form action="{{route('contactanos.store')}}" method="post">
    @csrf
    <label for="">
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>

    <label for="">
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>

    <label for="">
        Numero de telefono:
        <br>
        <input type="text" name="phone-number">
    </label>
    <br>

    <label for="">
        Mensaje:
        <br>
        <input type="text" name="mensaje">
    </label>
    <br>
    <button type="submit">ENVIAR CORREO</button>
</form>   
</body>
