<x-layout title="Formulario Cadastro">

    <form action="/cadastrar/salvar" method="get">
   
    <div class="col">
    <div class="card p-3 mb-2 bg-dark-subtle text-emphasis-dark mb-3 position-absolute top-100 start-50 translate-middle"
    style="max-width: 50 rem;">
        
    <div class="card-header p-3 mb-2 bg-dark-subtle text-emphasis-dark">Cadastro</div>
    <div class="card-body p-3 mb-2 bg-dark-subtle text-emphasis-dark">

     
        <label>Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome completo" required/> 
        <br>
        <br>
        <label>Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/>
      
        <label>CPF</label>
        <input type="text" id="cpf" name="cpf"  placeholder="000.000.000-00" required/>
        <br><br>
        <label>email</label>
        <input type="text" id="email" name="email" placeholder="@" required/>

        <label>Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Senha" required/>
        <br><br>
        <label>Tarefas</label>
        <input type="text" id="tarefa" name="tarefa"  placeholder="Descreva sua tarefa" required/>
        <br><br>
        <label>Data que ralizara a tarefa</label>
        <input type="date" id="dataTarefa" name="dataTarefa"  placeholder="Data da tarefa" required/>

        
        <label>  Hora que a tarefa sera realizada</label>
        <input type="time" id="horaTarefa" name="horaTarefa"  placeholder="horaTarefa" required/>
        </div>
    
        <br><br>
        <button type="submit" >Enviar</button>
    </form>

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
                         <li class="list-group-item">{{$dado->senha}}</li> 
                @endforeach
            </div>
                
            <div class="p-3 mb-2 bg-secondary text-white"> 
                @foreach($dados as $dado)
                <li class="list-group-item">{{$dado->adicionarTarefa}}</li>  
                @endforeach
             </div>
                
             <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
                @foreach($dados as $dado)
                         <li class="list-group-item">{{$dado->dataTarefa}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-secondary text-white"> 
                @foreach($dados as $dado)
                <li class="list-group-item">{{$dado->horaTarefa}}</li>  
                @endforeach
            </div>

            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">
                       
                    </div>
            
                </div>
            </div>   
       
    </div>
    
   
</x-layout>








































