@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="col-md-10 col-md-offset-1 ">
                     <br>
                     <img class="img-rounded" src="/{{\Auth::user()->src}}" style="height:256px; display:block; margin: 0 auto;" alt="">
                     <hr>
                     <p class="lead">Info Personal</p>
                                               {{ csrf_field() }}
                                               {{method_field('patch')}}
                                               <strong>Nombre:</strong><p>{{Auth::user()->name}}</p>
                                               <strong>Email:</strong><p>{{Auth::user()->email}}</p>
                         <hr>
                         <a href="editprofile"><input type="submit" name="Enviar"  value="Editar datos" class="btn btn-default"></a>
                   </div>


                    <div class="img">
                      <img style="height:150px; display:block; margin:auto;" src="{{asset("storage/default.png")}}" alt="">

                    </div>

                    {{-- <div class="col-md-6">
                      <img  class="img-responsive img-hover img-thumbnail" src="{{asset("storage/default.png")}}"style="height:150px; display:block; margin:auto;">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
