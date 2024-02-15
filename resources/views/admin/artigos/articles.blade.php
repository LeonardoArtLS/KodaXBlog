@extends('layouts.admin.template')
@section('title', 'Listar Artigos')
@section('content')
    <div class="row my-5">
        <div class="col">
            <h1 class="text-center fw-bold">Artigos</h1>
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="{{"artigos.create"}}" class="btn btn-purple">ADICIONAR</a>
            </div>
        </div>
    </div>

    @if (session()->has("success"))
        <div class="row">
            <div class="mx-auto col col-sm-12 col-md-6">
                <div class="alert bg-gradient text-white bg-purple text-center fw-bold">
                    {{session("success")}}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th>Imagem</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $a)
                        <tr>
                            <td>{{$a->title}}</td>
                            <td>{{$a->author}}</td>
                            <td>{{$a->date}}</td>
                            <td>{{$a->image}}</td>
                            <td>
                                <a href="{{route("artigos.edit", $a->id)}}">Editar</a>
                                {{-- a função preventDefault é para evitar que a função faça 2 ações quando o usuario der 2 cliques --}}
                                <a href="#" onclick="deleteRegistro('delete-form')">Deletar</a>
                                <form id="delete-form" class="d-none" action="{{route("artigos.destroy", $a->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{$articles->links()}}
        </div>
    </div>
    <script>
        function deleteRegistro(elem){
            if(confirm("Deseja deletar este registro?")){
            event.preventDefault()
            document.getElementById(elem).submit()
            }
        }
    </script>
@endsection