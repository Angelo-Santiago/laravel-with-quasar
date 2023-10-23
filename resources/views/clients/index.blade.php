<x-layout title='Listar Clientes'>
    <h1>Listar Clientes</h1>

    @foreach ($clients as $client)

    <p>{{ $client->id }}</p>

    <p>{{ $client->name }}</p>

    <p>{{ $client->created_at}}</p>

    @endforeach
</x-layout>