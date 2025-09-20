@extends('layout')
@section('content')
<table class="table table-striped-columns">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Pontos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rewards as $rew)
            <tr>
                <th scope="row">{{ $rew->id}}</th>
                <td>{{ $rew->name}}</td>
                <td>{{ $rew->description}}</td>
                <td>{{ $rew->required_points}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection