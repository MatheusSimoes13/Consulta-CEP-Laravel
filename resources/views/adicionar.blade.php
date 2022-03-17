@extends('app')

@section('content')
    <h1 class="mb-5">
        Adicionar CEP
    </h1>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    <form action="{{route('salvar')}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep" value="{{$cep}}">
        </div>
        <div class="form-group">
          <label for="Logradouro">Logradouro</label>
          <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
        </div>
        <div class="form-group">
          <label for="numero">Numero</label>
          <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
        </div>
        <div class="form-group">
          <label for="cidade">Cidade</label>
          <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
        </div>
        <div class="form-group">
          <label for="estado">Estado</label>
          <input type="text" class="form-control" name="estado" value="{{$estado}}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        
      </form>
@endsection