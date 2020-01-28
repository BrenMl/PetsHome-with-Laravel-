<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina principal</title>
        <link rel="stylesheet" href="{{URL('css/estilos.css')}}">
        <link rel="stylesheet" href="{{URL('css/fonts.css')}}">
        <link rel="stylesheet" href="{{URL('css/app.css')}}">
        <link rel="stylesheet" href="{{URL('css/Pacientes/estiloReg.css')}}">

    </head>
      <body>
        <header>

                <nav id="nav">
                   <ul>


                    <a href="#" class="logo"><span class="icon-pets"></span>PetsHome</a>



                    </li>
                    <li><a href=""><span class="icon-home3"></span>Home</a></li>
                    <li><a href=""><span class="icon-cart-plus"></span>Productos</a></li>
                    <li><a href=""><span class="icon-local_hospital"></span>Citas</a></li>
                    <li><a href=""><span class="icon-user-plus"></span>Registro</a></li>
                    <li class="submenu">
                    <a href="#"><span class="icon-whatsapp"></span>Contacto <span class="caret icon-arrow-down2"></span></a>
                    <ul class="children">
                        <li><a href="">�Quienes somos? <span class="icon-accessibility"></span></a></li>
                        <li><a href="">�Escribenos! <span class="icon-mail2"></span></a></li>
                        <li><a href="">Ayuda <span class="icon-question"></span></a></li>

                    </ul>
                    </li>
                     <li class="submenu" id="config">
                     <a href="#"><span class="icon-cog"></span></a>
                    <ul class="child">
                        <li><a href="">Perfil <span class="icon-user"></span></a></li>
                        <li><a href="">Cerrar sesion<span class="icon-switch"></span></a></li>

                    </ul>


                    </li>

                   </ul>
                </nav>

            </header>

            <header>
               <div class="menu_bar">
                   <a href="#" class="bt-menu"><span class="icon-indent-decrease"></span>Menu</a>
               </div>

                <nav id="nav1">
                   <ul>


                    <a href="#" class="logo"><span class="icon-pets"></span>PetsHome</a>



                    </li>
                    <li><a href=""><span class="icon-home3"></span>Home</a></li>
                    <li><a href=""><span class="icon-cart-plus"></span>Productos</a></li>
                    <li><a href=""><span class="icon-local_hospital"></span>Citas</a></li>
                    <li><a href=""><span class="icon-user-plus"></span>Registro</a></li>
                    <li class="submenu">
                    <a href="#"><span class="icon-whatsapp"></span>Contacto <span class="caret icon-arrow-down2"></span></a>
                    <ul class="children">
                        <li><a href="">�Quienes somos? <span class="icon-accessibility"></span></a></li>
                        <li><a href="">�Escribenos! <span class="icon-mail2"></span></a></li>
                        <li><a href="">Ayuda <span class="icon-question"></span></a></li>

                    </ul>
                    </li>
                     <li class="submenu" id="config">
                     <a href="#"><span class="icon-cog"></span></a>
                    <ul class="child">
                        <li><a href="">Perfil <span class="icon-user"></span></a></li>
                        <li><a href="">Cerrar sesion<span class="icon-switch"></span></a></li>

                    </ul>


                    </li>

                   </ul>
                </nav>

            </header>



            <div class='titulo1' >
              <h2 >La mejor forma de demostrar cuanto amas a tu mascota es cuidar de el</h1>
              <br><br>
              <h2>¿Quieres ser parte de nuestra gran familia?</h2>

            </div>
            <br><br><br><br>
            <div class="reg">
              <div class="otro">

                <h5 class='t1'>REGISTRO DE TU MASCOTA</h5>

                <br><br>
                <form action="/registrar" method="post">
                {{ csrf_field() }}
                <div class="form-group" >
                    <label for="">Selecciona tu numero de identificacion:</label>
                    <br>
                      <select class="combo" name="id">
                          @foreach($consulta as $p)
                          <option value="{{$p->IdClient}}">{{$p->IdClient}}</option>
                          @endforeach
                      </select>

                </div>
                <br>
                <div class="form-group">
                  <label for="">Nombre de la mascota:</label>
                  <br>
                  <input  class="form-control" type="text" name="nombre" placeholder="Ejemplo: 'Conchita'">
                </div>
                <br>
                <div class="form-group">
                  <label for="">Especie:</label>
                  <br>
                  <input class="form-control" type="text" name="especie" placeholder="Ejemplo: 'Gato'">
                </div>
                <br>
                <div class="form-group" >
                  <label for="">Raza:</label>
                  <br>
                  <input class="form-control" type="text" name="raza" placeholder="Ejemplo: 'Siames'">
                </div>
                <br>
                <div class="form-group" >
                    <label for="">Fecha de nacimiento:</label>
                    <br>
                    <input class="form-control" type="date" name="fechaNacimiento" >
                </div>
                    <br>
                    <button class="btn btn-success" type="submit" value="submit" >Guardar</button>
              </form>
              </div>
              <div class="divcito">

              </div>

            </div>

      </body>

</html>
