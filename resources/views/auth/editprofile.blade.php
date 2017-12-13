<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="row">
           <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-body">
                       <div class="col-md-10 col-md-offset-1 ">
                         <form action="/profile/avatar" class="dropzone" method="post">
                           {{ csrf_field() }}
                           <div class="fallback">
                             <input name="file" type="file" />
                           </div>
                         </form>
                         <hr>
                         <form class="" action="/home" method="post">
                         <p class="lead">Info Personal</p>
                                                   {{ csrf_field() }}
                                                   {{method_field('patch')}}
                                                   <strong>Nombre:</strong><input type="text" name="name" id="name" value="{{Auth::user()->name}}">
                                                   <strong>Email:</strong><input type="text" name="email" id="email" value="{{Auth::user()->email}}">
                                                 <br><br>
                             <input type="submit" name="Enviar"  value="Actualizar" class="btn btn-default">
                           </form>
                       </div>
                   </div>
               </div>
           </div>
  </body>
</html>
