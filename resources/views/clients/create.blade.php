<h1>Novo Cliente</h1>
<form action="{{ route('clients.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome">
    <input type="text" name="gender" id="gender" placeholder="Gênero">
    <input type="text" name="city" id="city" placeholder="Cidade">
    <input type="text" name="state" id="state" placeholder="Estado">
    <input type="text" name="country" id="country" placeholder="País">
    <input type="date" name="birthdate" id="birthdate" placeholder="Data de Nascimento">
    <button>Cadastrar</button>
</form>