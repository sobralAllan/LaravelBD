<x-layout title="Formulário de Cadastro">
    <div>
        @foreach($dados as $dado)
        <li class="list-group-item">{{$dado->nome}}</li>
        <li class="list-group-item">{{$dado->telefone}}</li>
        @endforeach
    </div>

    <form action="/models/salvar" method="POST">
        @csrf <!-- Diretiva para validar o formulário -->
        <br>
        <label>Nome: </label>
        <input type="text" placeholder="Informe seu nome" id="nome" name="nome" required><br><br>

        <label>Telefone: </label>
        <input type="text" placeholder="Informe seu nome" id="telefone" name="telefone" required><br><br>
        
        <button type="submit">Enviar</button>
    </form> 
</x-layout>