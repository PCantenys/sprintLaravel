@extends('layout')
@section('content')
<section class="titulo">
  <h1 style="color:black" class="faq">- Preguntas Frecuentes (FAQ) -</h1>
</section>
<div class="container"> <!-- contenedor principal -->
  <!--pregunta0-->
  <div class="super-contenedor0">
  <div class="img0"><img class="imagen0" src="images/documento-512.png" alt="documento" width="150px"/></div><!-- imagen-->
  <div class="pregunta0">
    <input type="checkbox" id="abre-respuesta0"><!-- checkbox de respuesta0 -->
    <div class="preg0">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta0">
          <h2>¿Qué información necesitan para armar mi web?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta0">
      <p>Usualmente planificamos la construcción de tu sitio web en función de tu idea de negocio, tus textos y tus activos digitales. En caso de no contar con algunos de estos elementos nuestro equipo multidisciplinario te asesorará para crear el mejor sitio posible para tu presupuesto.</p>
    </div>
  </div>
  </div>
  <!--pregunta1-->
  <div class="super-contenedor1">
  <div class="img1"><img class="imagen1" src="images/monay-512.png" alt="pagar" width="150px"/></div><!-- imagen-->
  <div class="pregunta1">
    <input type="checkbox" id="abre-respuesta1"><!-- checkbox de respuesta1 -->
    <div class="preg1">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta1">
          <h2>¿Que formas de pago existen? ¿Se puede pagar en cuotas?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta1">
      <p>Para tu comodidad, te ofrecemos una amplia gama de formas de pago:</p>
      <ol type="A">
        <li>Tarjetas de Credito (Amex/Mastercard/Visa)</li>
        <li>Tarjetas de Debito.</li>
        <li>Efectivo.</li>
        <li>TodoPago.</li>
        <li>MercadoPago.</li>
        <li>Transferencia.</li>
        <li>Pago Mis Cuentas / PagoFacil </li>
      </ol>
      <p>Además, tenemos disponible el pago en cuotas que dependerá en gran medida del servicio que usted contrate. </p>
    </div>
  </div>
  </div>
  <!--pregunta2-->
  <div class="super-contenedor2">
  <div class="img2"><img class="imagen2" src="images/time-512.png" alt="tiempo" width="150px"/></div><!-- imagen-->
  <div class="pregunta2">
    <input type="checkbox" id="abre-respuesta2"><!-- checkbox de respuesta2 -->
    <div class="preg2">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta2">
          <h2>¿Cuánto tiempo de demora tiene la creacioón de mi sitio?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta2">
      <p>Tenemos la particularidad de trabajar de forma muy rápida y efectiva. Para crear tu sitio, contamos con un aproximado de 15 días hábiles a partir de la entrega del material. Igualmente, te pediremos con anticipación que nos brindes una fecha límite para realizar tu proyecto y así tener una mejor organización del mismo. En casos de urgencias, la factibilidad de un tiempo de entrega menor será evaluada por nuestro equipo técnico. </p>
      <p>El tiempo estimado podrá variar dependiendo del servicio que usted contrate. Nos encargaremos de informarle acerca de la demora máxima que pueda llegar a alcanzar, en el momento que usted se contacte con nosotros.</p>
    </div>
  </div>
  </div>
  <!--pregunta3-->
  <div class="super-contenedor3">
  <div class="img3"><img class="imagen3" src="images/responsive-512.png" alt="responsive" width="150px"/></div><!-- imagen-->
  <div class="pregunta3">
    <input type="checkbox" id="abre-respuesta3"><!-- checkbox de respuesta3 -->
    <div class="preg3">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta3">
          <h2>¿Mi sitio se podrá ver perfectamente en celulares y tablets?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta3">
      <p>Todos nuestros sitios web son responsive, pensados para adaptarse a todo tipo de pantalla, desde celulares hasta tablets y computadoras.</p>
    </div>
  </div>
  </div>
  <!--pregunta4-->
  <div class="super-contenedor4">
  <div class="img4"><img class="imagen4" src="images/servidor-512.png" alt="hosting" width="150px"/></div><!-- imagen-->
  <div class="pregunta4">
    <input type="checkbox" id="abre-respuesta4"><!-- checkbox de respuesta4 -->
    <div class="preg4">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta4">
          <h2>¿Ustedes proveen el hosting/servidor?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta4">
      <p>Brindamos el servicio de hosting analizando el posible flujo de visitantes que tendrá tu nuevo sitio, en función de su plan de negocios o de sus estadísticas actuales.</p>
    </div>
  </div>
  </div>
  <!--pregunta5-->
  <div class="super-contenedor5">
  <div class="img5"><img class="imagen5" src="images/coding-512.png" alt="coding" width="150px"/></div><!-- imagen-->
  <div class="pregunta5">
    <input type="checkbox" id="abre-respuesta5"><!-- checkbox de respuesta5 -->
    <div class="preg5">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta5">
          <h2>¿Las páginas son difíciles de mantener?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta5">
      <p>¡Pedinos presupuesto por una pagina autoadministrable de facil uso!</p>
    </div>
  </div>
  </div>
  <!--pregunta6-->
  <div class="super-contenedor6">
  <div class="img6"><img class="imagen6" src="images/calendario-512.png" alt="calendario" width="150px"/></div><!-- imagen-->
  <div class="pregunta6">
    <input type="checkbox" id="abre-respuesta6"><!-- checkbox de respuesta6 -->
    <div class="preg6">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta6">
          <h2>¿Con cuánto tiempo de anticipación tengo que encargar mi sitio?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta6">
      <p>Nosotros recomendamos que una semana antes de encargar el servicio ya estes en contacto con nosotros para una mejor organización. Contamos con un equipo de planificación, que en ese tiempo previo, podrá ayudarte con las ideas que tengas para tu sitio, y de esa manera tendremos un mejor panorama de lo que quieres y confiamos en que obtendrás mejores resultados de los esperados.</p>
    </div>
  </div>
  </div>
  <!--pregunta7-->
  <div class="super-contenedor7">
  <div class="img7"><img class="imagen7" src="images/pagina-web-512.png" alt="hosting" width="150px"/></div><!-- imagen-->
  <div class="pregunta7">
    <input type="checkbox" id="abre-respuesta7"><!-- checkbox de respuesta7 -->
    <div class="preg7">
      <a class="a-pregunta" href="">
        <label for="abre-respuesta7">
          <h2>¿Nuestras opciones de página no se ajustan a tus necesidades?</h2>
        </label>
      </a>
    </div>
    <div class="respuesta7">
      <p>No dudes en consultarnos acerca de otras opciones o de preguntar presupuestos por otros modelos de páginas web. ¡Estamos siempre predispuestos a escuchar nuevas ideas!</p>
    </div>
  </div>
  </div>
</div>
<a href="contacto.php">
  <div class="contactanos">
    <div class="contactanos-p"><p><a href="index.php#ancla_contacto">¿Más preguntas? ¡Contactanos!</a></p></div>
  </div>
</a>
@endsection
