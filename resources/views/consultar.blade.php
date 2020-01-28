<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina principal</title>
        <link rel="stylesheet" href="{{URL('css/app.css')}}">
        <link rel="stylesheet" href="{{URL('css/Pacientes/estiloCon.css')}}">
    </head>
      <body>

        <div class="cubierta">
          <br><br><br>
            <h1>PETSHOME PENSANDO EN TUS MASCOTAS </h1>
            <br><br>
            <h2>"Un buen alimento y mucho ejercicio es igual a una larga vida"</h2>
          <br><br><br>
          <br><br><br>
          <h2>Mis mascotas</h2>
          <div class="tablita">
            <table class="table">
              <thead>
                <tr>
                  <th><span class="label label-default">Id Mascota</span></th>
                  <th><span class="label label-default">Id Cliente</span></th>
                  <th><span class="label label-default">Nombre</span></th>
                  <th><span class="label label-default">Especie</span></th>
                  <th><span class="label label-default">Raza</span></th>
                  <th><span class="label label-default">Fecha de nacimiento</span></th>
                  <th><span class="label label-default">Operacion</span></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($consulta as $paciente)
                  <tr>
                    <td>{{$paciente->idmascota}}</td>
                    <td>{{$paciente->IdCliente}}</td>
                    <td>{{$paciente->Nombre}}</td>
                    <td>{{$paciente->especie}}</td>
                    <td>{{$paciente->raza}}</td>
                    <td>{{$paciente->fechaNacimiento}}</td>
                    <td><a class='btn btn-warning' href="/eliminarPaciente/{{$paciente->idmascota}}">Eliminar</a>
                </tr>
            @endforeach
              </tbody>

            </table>
          </div>
        </div>


      </body>

</html>
