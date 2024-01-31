<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!doctype html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #70160e;">
          <a class="navbar-brand" href="cadastrar.blade.php" style="color: #e1e3db;">Agenda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
             

            </div>
          </div>
        </div>
      </nav>

<style>

body{ 
    background-color: #e1e3db;
}

h2{
 color: #70160e;
}

.left{
    float: left;
    display: flex;
    width: 10%;
    height: 2700px;
    background-color: #e1e3db;
    color:#161917;
    padding: 20px;

    }

    
    .right{
        float: right;
        display: flex;
        width: 10%;
        height:2700px;
        background-color: #e1e3db;
        color:#161917;
        padding: 20px;
       

    }
    /* Footer */
footer {
    padding: 10px;
    text-align: center;
    background-color: #70160e;
    color:#161917;

  
}
</style>

<aside class="left"></aside>

<aside class="right"></aside>

    <div>
     {{$slot}} <!-- Quem vai ser subvstituido pelo conteudo -->
    </div>


   
</body>
</html>