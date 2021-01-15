@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar aplicación</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/me/apps/'. $app->id)}}" method="post">
                        @method('Put')
                        @csrf

                        <div class="form-group">
                            <label for="precio" >Precio</label>


                            <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio',$app->precio) }}" required autocomplete="precio" autofocus>

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
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
