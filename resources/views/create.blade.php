@extends('templates.template')
@section('content')
    <div class="p-3 mb-2 bg-secondary text-warning">
    <h1 class="text-center">@if(isset($product)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($product))
            <form name="formEdit" id="formEdit" method="post" action="{{url("products/$product->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('products')}}">
        @endif
            
            
            @csrf
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição:" value="{{$product->descricao ?? ''}}" required><br>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$product->relUsers->id ?? ''}}">{{$product->relUsers->name ?? 'Selecione'}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="codigo" id="codigo" placeholder="Código:" value="{{$product->codigo ?? ''}}" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$product->price ?? ''}}" required><br>
            <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria:" value="{{$product->categoria ?? ''}}" required><br>
            <input class="btn btn-primary" type="submit" value="@if(isset($product)) Editar @else Cadastrar @endif">
        </form>
        <br><a href="/products"><h3 class="text-warning text-center">Voltar para home</h3></a>
    </div>
</div>
@endsection