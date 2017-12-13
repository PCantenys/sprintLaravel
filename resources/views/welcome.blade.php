<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      @extends('layout')
      @section('content')


{{-- prueba --}}
<header>
<h1>Digital Focus</h1>
<h3>Nos encargamos de que sus ideas se conviertan en casos de éxito respetando los mejores estandares y con el mejor personal</h3>
<a class='boton-contacto' href="index.php#ancla_contacto">Contactate con nosotros!</a>
</header>

<section class="container">

<h2>Nuestros Productos</h2>

<div class="productos">
  @foreach($products as $product)
    <article class="servicio">
      <img width="50%" style="border-radius: 50%;" src="{{ asset('storage/productos/'.$product['srcImg'])}}" alt="">
      <h3>{{$product['name']}}</h3>
      <p>{{$product['description']}}</p>
      <p>{{$product['price']}}</p>
    </article>
  @endforeach
  {{ $products->links() }}
</div>

{{-- <article class="servicio">
  <img src="images/ecommerce.jpg" alt="">
  <h3>Marcas que venden</h3>
  <p>El comercio online se ha transformado en clave para las empresas, fundamentalmente por la facilidad que brinda tanto en mantenimiento e infraestructura, ya sea una pequeña o gran empresa. Realizamos el desarrollo customizado a las necesidades de cada cliente, tanto esteticas como funcionales.</p>
</article>

<article class="servicio">
  <img src="images/institucional2.png" alt="">
  <h3>Sitio institucional</h3>
  <p>Un sitio web representa a una empresa a nivel global, y es fundamental que la imágen de la empresa esté representada acordemente, estéticamente, funcionalmente y tecnológicamente, teniendo un fuerte impacto visual y una clara navegabilidad.</p>
</article>

<article class="servicio">
  <img src="images/hosting.png" alt="">
  <h3>Hosting</h3>
  <p>No te preocupes por contratar el hosting, nosotros mismos podemos hacerlo por vos! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vennsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
</article>

<article class="servicio">
  <img src="images/mantenimiento.png" alt="">
  <h3>Mantenimiento</h3>
  <p>El seguimiento y mantenimiento de un sitio web puede responder a varias necesidades, ya sea para estar actualizado tecnológicamente, para mostrar una imágen confiable con un sitio web dinamico, para realizar diversas tareas de diseño y marketing, para mejorar el posicionamiento orgánico o para ofrecer nuevos productos a los clientes. </p>
</article>

<article class="servicio">
  <img src="images/sem.png" alt="">
  <h3>Publicidad Online</h3>
  <p>Ya sea por una necesidad de buscar un mayor rendimiento de la campaña o buscando nuevas estrategias de expansión, muchas veces se requiere una campaña de publicidad online, ya sea en redes sociales o motores de búsqueda o ambos. Realizamos el desarrollo de la campaña y su mantenimiento ajustando la misma para enfocarnos en el objetivo y maximimar los resultados.</p>
</article>
</section> --}}

{{-- prueba --}}




        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Perfil</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif




        {{-- <div class="formulario_contacto">
          <h1>Contacto</h1>
          <label for="nombre">Nombre</label><input type="text" name="nombre" value=""><br>
          <label for="email">Email</label><input type="email" name="email" value=""><br>
          <label for="mensaje">Mensaje</label><br><textarea name="mensaje" rows="8" cols="80"></textarea><br><br>
          <button type="submit" name="button">Enviar</button>
        </div> --}}

      @endsection
    </body>


</html>
