@extends('app')

@section('content')
    <h1 class="mb-5">
        Buscar CEP
    </h1>
    <form action="{{route('buscar')}}" method="GET">
        <div class="form-group">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" placeholder="Digite o CEP" name="cep">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
@endsection