@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">Mis aplicaciones</h1>
                @foreach($apps as $app)

                    <div class="card mb-4" >
                        <img class="card-img-top" src="..." alt="Card image cap">

                        <div class="card-body">
                            <p>{{$app->nombre}}</p>
                            <p>Categoria:{{$app->categoria}}</p>
                            <p>Precio:{{$app->precio}}</p>
                            <hr/>

                            <a href="#" class="card-link float-md-right" >Eliminar</a>
                            <a href="{{'/me/apps/'. $app->id.'/edit'}}" class="card-link">Editar</a>

                        </div>

                    </div>






                @endforeach
                {{$apps->links()}}

            </div>
        </div>
    </div>
@endsection
