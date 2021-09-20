<h1>Clientes</h1>

<a href="{{ route('clients.create') }}">Cadastrar Novo Cliente</a>

@foreach ($clients as $client)
    <p>{{$client->name}}</p>
@endforeach