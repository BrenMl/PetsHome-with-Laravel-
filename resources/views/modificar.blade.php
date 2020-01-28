<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina principal</title>
        <link rel="stylesheet" href="{{URL('css/app.css')}}">
        <link rel="stylesheet" href="/css/Pacientes/estiloModi.css">
    </head>
      <body>
        <div class="tema">
            <h1 class="nota">"La salud de nuestra mascota se refleja en su pelo"</h1>
        </div>
        <br><br><br><br>
        <div class="completo">
          <div class="modi">
            <br><br>
            <h4 class="nota">Modificacion para un registro de tu mascota</h4>
            <br><br><br>
              <form class="" action="/Modificar" method="post">

                    {{ csrf_field() }}
                    <label for="">Selecciona la identificacion de la mascota:</label>
                    <br>
                      <select class="combo" name="id">
                          @foreach($consulta as $p)
                          <option value="{{$p->idmascota}}">{{$p->idmascota}}</option>
                          @endforeach
                      </select>
                <br><br>
                <button type="submit" class="btn btn-warning" value="submit">Buscar</button>
              </form>
              <br><br><br>
            <form  action="{{ url('Modificar/modificacion') }}" method="post" >
  {{ csrf_field() }}
        <div class="form-group">
          <label for="">Id Cliente:  </label>
          <input id="yu" class="form-control" type="text" name="idcliente" value= "{{$idC}}" >
        </div>
        <div class="form-group">
          <label for="">Nombre:</label>
          <input type="text" name="nom"class="form-control" value="{{$nom}}" >
        </div>
        <div class="form-group">
          <label for="">Especie:</label>
          <input type="text" name="espe" class="form-control" value= "{{$espec}}" >
        </div>
        <div class="form-group">
          <label for="">Raza:</label>
          <input type="text" name="raz" class="form-control"  value= "{{$raz}}">
        </div>
        <div class="form-group">
          <label for="">Fecha de nacimiento:</label>
          <input type="text" name="Fna" class="form-control" value= "{{$Fna}}" >
        </div>
          <button type="submit" class="btn btn-warning" name="id" value="{{$idM}}">Modificar</button>

</form>        </div>
          </div>



      </body>

</html>
