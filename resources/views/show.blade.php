@extends('templates.template')
@section('content')
    <div class="p-3 mb-2 bg-secondary text-warning">
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-10 m-auto">
        @php
        $user=$product->find($product->id)->relUsers;
        @endphp
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Descrição: <br>{{$product->descricao}}<br></th>
                    <th scope="col">Código: <br>{{$product->codigo}}<br></th>
                    <th scope="col">Preço:<br> R$ {{$product->price}}<br></th>
                    <th scope="col">Nome: <br>{{$user->name}} <br></th>
                    <th scope="col">Categoria: <br>{{$product->categoria}} <br></tr></th>
                </tr>
            </thead>
        </table>
        <br><a href="/products"><h3 class="text-warning text-center">Voltar para home</h3></a>
    </div>
</div>
@endsection