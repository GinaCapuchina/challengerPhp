@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar aplicación</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/me/apps') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre" >Nombre</label>

                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="categoria" >Categoria</label>


                                <input id="categoria" type="text" class="form-control @error('categoria') is-invalid @enderror" name="categoria" value="{{ old('categoria') }}" required autocomplete="categoria" autofocus>

                                @error('categoria')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="precio" >Precio</label>


                            <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>

                            @error('precio')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                     <!--TODO: Investigar como subir una imagen
                        <div class="form-group">
                            <label for="imagen" >Imagen</label>


                            <input id="imagen" type="text" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" required autocomplete="imagen" autofocus>

                            @error('imagen')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        -->
                        <button type="submit" class="btn btn-primary">Agregar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
