<x-layout title="Formulario Cadastro">

    
    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- valida o formulario -->
        <br>
        <label>Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome completo" required/> 
        
        <label>Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/>

        <label>CPF</label>
        <input type="text" id="cpf" name="cpf"  placeholder="000.000.000-00" required/>

        <label>email</label>
        <input type="text" id="email" name="email" placeholder="@" required/> <br><br>

        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" id="senha">
        </div> -->
        
        <label>Tarefas</label>
        <input type="text" id="tarefa" name="tarefa"  placeholder="Descreva sua tarefa" required/>
        
        <button type="submit">Enviar</button>

                @foreach($dados as $dado)
                    <li class="list-group-item">{{$dado->nome}}</li>
                @endforeach
  
                @foreach($dados as $dado)
                    <li class="list-group-item">{{$dado->telefone}}</li>
                @endforeach

                @foreach($dados as $dado)
                      <li class="list-group-item">{{$dado->cpfUsuario}}</li> 
                @endforeach

                @foreach($dados as $dado)
                         <li class="list-group-item">{{$dado->emailUsuario}}</li> 
                @endforeach
                
                @foreach($dados as $dado)
                <li class="list-group-item">{{$dado->adicionarTarefa}}</li>  
                @endforeach

    
    </form>
</x-layout>








































