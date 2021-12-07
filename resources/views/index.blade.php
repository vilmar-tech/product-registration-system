
@extends('layouts.app')
@section('content')
    <div class="p-3 mb-2 bg-secondary text-warning">
    <h1 class="text-center">Sistema de Cadastro de Produtos</h1> <hr>
    
    <div class="text-center mt-3 mb-4">
        <a href="{{url('products/create')}}">
            <button class="btn btn-success">Cadastrar Produtos</button>
        </a>
    </div>

    <div class="col-10 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Descrição</th>
                <th scope="col">Código</th>
                <th scope="col">Preço</th>
                <th scope="col">Nome</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($product as $products)
                @php
                    $user=$products->find($products->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$products->id}}</th>
                    <td>{{$products->descricao}}</td>
                    <td>{{$products->codigo}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="{{url("products/$products->id")}}">
                            <button class="btn btn-light">Visualizar</button>
                        </a>

                        <a href="{{url("products/$products->id/edit")}}">
                            <button class="btn btn-info">Editar</button>
                        </a>

                        <a href="{{url("products/$products->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
        {{$product->links("pagination::bootstrap-4")}}</div>
    </div>
    </div>
@endsection