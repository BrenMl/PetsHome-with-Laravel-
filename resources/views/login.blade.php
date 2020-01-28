<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina principal</title>
    </head>
      <body>
        <h1>@lang('gen.saludo')</h1>
      <h1>Inicio de sesion</h1>
<form class="" action="/iniciarSesion" method="post">
  {{ csrf_field() }}
  usuario:
  <br>
  <input type="text" name="usuario" value="">
  <br>
  contraseña:
  <br>
  <input type="text" name="pass" value="">
  <button type="submit" name="button">Enviar</button>
</form>
      </body>

</html>
