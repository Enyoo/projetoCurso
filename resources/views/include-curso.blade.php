<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Painel de Conrtole</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- Styles 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 
        -->
        <!-- JavaScript 
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Panel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="{{route('aluno.index')}}">Alunos</a></li>                                               
                            <li><a href="{{route('curso.index')}}">Cursos</a></li>                                 
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li class="dropdown">
                        <a href="#" style="text-decoration: none">
                            <span id="underline">Enyo Souza</span> 
                        </a>                      
                    </li>
                    <li><a href="#" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav> 
        <br>
        <br>
        <div id="line-one">   
            <div class="container">
                <div class="row">
                	<br />
                	<br />
                    <div class="col-md-12" id="center"> 
                        <h1><b>Cursos</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Panel</a></li>                  
                            <li><a href="{{route('curso.index')}}">Cursos</a></li>                  
                            <li class="active">Cadastro de Curso</li>
                        </ol>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>CADASTRO DE CURSOS</b></h4>
                        <br>
                        <div class="table-responsive">
                            <form method="post" action="{{route('curso.store')}}" enctype="multipart/form-data">{{ csrf_field() }}

	                        <div class="col-md-12">              
	                            <div class="form-group" class="col-md-6">
	                                <label for="name">Nome do Curso</label>
	                                <input type="text" name="course" class="form-control form" placeholder="Ex: Química" required>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group" class="col-md-6">
	                                <label for="description">Descrição</label>
	                                <input type="text" name="description" class="form-control form" placeholder="Ex: Este curso aborda os assuntos...">
	                            </div>
	                        </div>                       
	                        <div class="col-md-12">                   
	                            <button type="reset" class="btn btn-default">
	                                Limpar
	                            </button>
	                            <button type="submit" 
	                                    class="btn btn-warning" id="black">
	                                Cadastrar
	                            </button>
	                        </div>
	                    </form> 

                        </div>
                    </div>
                </div>
            </div>
</body>
</html>

