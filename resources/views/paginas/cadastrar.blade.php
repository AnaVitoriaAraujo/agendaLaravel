<x-layout title="Formulario Cadastro">

    <h2>Agenda de Tarefas</h2>
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

        <label>Data que ralizara a tarefa</label>
        <input type="text" id="dataTarefa" name="dataTarefa"  placeholder="Data da tarefa" required/>

        
        <label>hora que a tarefa sera realizada</label>
        <input type="text" id="horaTarefa" name="horaTarefa"  placeholder="horaTarefa" required/>
        </div>
    
        <br><br>
        <div class="position-relative">
        <div class="position-absolute top-0 start-50 translate-middle"><button type="submit" >Enviar</button></div>
        </div>
       
        <br><br>

            <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">

                    @foreach($dados as $dado)
                        <li class="list-group-item">{{$dado->nome}}</li>
                    @endforeach
            </div>
        

             <div class="p-3 mb-2 bg-secondary text-white">
                    @foreach($dados as $dado)
                        <li class="list-group-item">{{$dado->telefone}}</li>
                    @endforeach
             </div>
             
  
             <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">   
                @foreach($dados as $dado)
                      <li class="list-group-item">{{$dado->cpfUsuario}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-secondary text-white">
                @foreach($dados as $dado)
                         <li class="list-group-item">{{$dado->emailUsuario}}</li> 
                @endforeach
            </div>
                
            <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark"> 
                @foreach($dados as $dado)
                <li class="list-group-item">{{$dado->adicionarTarefa}}</li>  
                @endforeach
             </div>
                
             <div class="p-3 mb-2 bg-secondary text-white">
                @foreach($dados as $dado)
                         <li class="list-group-item">{{$dado->dataTarefa}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark"> 
                @foreach($dados as $dado)
                <li class="list-group-item">{{$dado->horaTarefa}}</li>  
                @endforeach
             </div>
    
    </form>
</x-layout>








































