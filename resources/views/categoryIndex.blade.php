@extends('layout')
@section('content')
<table class="table table-striped-columns">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $cat)
            <tr>
                <th scope="row">{{ $cat->id}}</th>
                <td>{{ $cat->name}}</td>
                <td>{{ $cat->description}}</td>
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection