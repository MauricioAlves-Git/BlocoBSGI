<!HTML>

<!-- form_inserc_org.php 
     formulario de insercao das organizaçoes
<!-- versao 2.6 - baseado em cadastro_bd_pdo (form-insercao.php) -->

<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilo1-v2.6.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title> BSGI - Organização </title>
  <!--
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	-->	
    </head>

<body>
    <header>
  
  	<div id="cab_esq">
		<img class="contain" src="..\src\img\BSGI-logo2c.png" align=left width="70%">
	</div> 
	<div id="cab_dir">
		<!-- <img src="img\icon3-user.png" align=left> ENORME -->
            
            
            <style>
                #cab_dir{
                    display: inline-block;
                }
            </style>
            
                    
            <span>
                <i><img src="..\src\img\icon3-user.png" height="75" ></i> <!-- align="right" ENORME -->
                <img src="..\src\img\icon3-information.png" height="75">
                <img src="..\src\img\icon-instagram.png" height="75">
                <img src="..\src\img\icon-facebook.png" height="75">
                <img src="..\src\img\icon-facebook.png" height="75">
                <!-- <img src="..\src\img\icon3-user.png" height="8%" > -->
            </span>            
            
            
	</div>
    </header>

    <nav id="navegar"> 
	<a href="#" class="opcoes">Perfil</a>
	<a href="#" class="opcoes">Info</a>
	<a href="#" class="opcoes">Instagram</a>
	<a href="#" class="opcoes">Facebook</a>
	<a href="#" class="opcoes">Home</a>
    </nav>
   

    <section id="barra"> </section>
    <section id="main"> 
        <h1 class="titulo">Cadastro Organizacional   - - - - - - - - - - - - - - - - - - -   Consultar - Incluir - Excluir</h1>

    
    <!-- *** FORMULÁRIO PARA INSERÇÃO DE DADOS *** -->
    <form id="formulario" action="insercao_organizacao-v1.2.php" method="GET">
        <style>
            input[type=text], select, textarea {
                width: 100%; 
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                /* margin-left: 10px; */
                resize: vertical;
            }
            /* não sei pra que */
            label {
                /* padding: 12px 12px 12px 0; */
                display: inline-block;
            }


            /* botão de limpar  */
            input[type=reset] {
                background-color: red;  /* era #4CAF50 */
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                filter: drop-shadow(0 2px 2px rgb(160, 160, 160));
                float: right;
                margin-right: 1%;
            }
            input[type=reset]:hover {
                background-color: rgb(220,0,0); /* era #45a049 - ACERTAR COR EM HOVER */
            }            
            /* botão de salvar */
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                filter: drop-shadow(0 2px 2px rgb(160, 160, 160));
                float: right;
                margin-right: 14%;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            
            /* caixa em torno do formulário */
            /*
            .container {
                border-radius: 5px;
                background-color: whitesmoke;  /* #f2f2f2 - fundo da caixa */ 
            /*    padding: 20px;                
            } */
            /* tamanho das colunas */
            .col-25 {
                float: left;
                width: 25%;
                margin-top: 3px;/* era 6px */
                padding: 5px;   /* espaço entre os campos */
            }
            .col-50 {
                float: left;
                width: 50%;
                margin-top: 3px;
                padding: 5px;   /* espaço entre os campos */
            } 
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-50, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
        </style>
            

        
    <div id="div1" class="container">

        <!-- <style>
            div1 {
                display: inline;
            }
        </style> -->
        <div class="row">
            <div class="col-50">
            <label for="idNomeOrg"> </label>
		<input type="text" name="nome_org" id="idNomeOrg" placeholder="Nome da Organização" required 
                 class="form-control mb-1 mr-sm-2">
            </div>
            <br> 
        
            <div class="col-25">
            <label for="idTipoOrg"> </label> 
            <select name="TipoOrg" id="idTipoOrg" class="form-control mb-1 mr-sm-2" required>
           
		<!-- <input type="text" select id="id_tipo_org" name="TipoOrg" placeholder="Tipo da Organização (selecione)" 
                 class="form-control mb-1 mr-sm-2"> -->
            <optgroup label="Tipo da Organização:">
            <option value="">Tipo da Organização:</option> 
            <option value="1">Bloco</option>
            <option value="2">Comunidade</option>
            <option value="3">Distrito</option>
            </optgroup>
            </select>
            </div>
            
        
            <div class="col-25">
            <label for="idNomeOrgPai"> </label>
		<input type="text" name="id_organizacao_pai" id="idNomeOrgPai" placeholder="Organização-Pai (selecione)" 
                 class="form-control mb-1 mr-sm-2">
            </div>
            <br>   
            
            <div class="col-50">
            <label for="idLiderOrg"> </label>
            <input type="text" name="nomeidliderorg" id="idLiderOrg" placeholder="Líderes Organizacionais (inserir)" 
                 class="form-control mb-1 mr-sm-2">    
            </div>
        
        </div>
    </div> <!-- fim do "div1" -->


    <div id="div2" class="container">  
        
        <div class="row">
            <div class="col-50">
                <label for="idEmailOrg"> </label>
		<input type="email" name="email_org" id="idEmailOrg" placeholder="E-mail da Organização ()" 
                 class="form-control mb-1 mr-sm-2">
            </div>
        
            <div class="col-25">
            <label for="idFoneFixoOrg"> </label>
		<input type="tel" name="tel_fixo_org" id="idFoneOrg" placeholder="Fone fixo (11-3333-2222)" 
                 class="form-control mb-1 mr-sm-2">
            </div>
            <br>
        
            <div class="col-25">
            <label for="idFoneCelOrg"> </label>
		<input type="tel" name="tel_cel_org" id="idFoneOrg" placeholder="Celular  (11-99999-8888)" 
                 class="form-control mb-1 mr-sm-2">
            </div>
             
    
    <!-- <div id="div2b" class="container">  -->
        <!-- <div class="col-75"> -->
        
        <!--<div class="col-50">
            <label for="idEmailOrg"> </label>
		<input type="email" name="email_org" id="idEmailOrg" placeholder="E-mail da Organização ()" 
                 class="form-control mb-1 mr-sm-2">
            </div> -->  
        
            <!-- </div>	-->

            <br>        
        </div>
        <!-- </div> fim do "div2b" -->
    </div> <!-- fim do "div2" -->    
 
    
    <div id="div3" class="container">

        <div class="row">
            <div class="col-25">        
            <label for="idUFOrg"> </label>
                <!-- <input type="text" name="FALTANDO" id="idUFOrg" placeholder="Nome da Organização"> -->
                <!-- SELECT ESTÁTICO -->
                <select name="UFOrg" id="idUFOrg" class="form-control mb-1 mr-sm-2">
                <!-- <optgroup label="Selecione a UF:"> -->
                    <option value="">Selecione a UF</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AM">Amazonas</option>
                    <option value="AP">Amapá</option>
                    <option value="DF">Detrito Federal</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                <!-- </optgroup> -->
                </select>
            </div>    
            </br>   
        
            <div class="col-25">
            <label for="idCEPOrg"> </label>
        	<input type="number" name="CEP_org" id="idCEPOrg" placeholder="CEP ()" class="form-control mb-1 mr-sm-2">
            </div>
            <br> 
        
            <div class="col-25">
            <label for="idCidadeOrg"> </label>
        	<input type="text" name="id_cidade_org" id="idCidadeOrg" placeholder="Cidade (selecionar)" required 
                 class="form-control mb-1 mr-sm-2">
            </div>
            <br>
            
            <div class="col-50">    
            <label for="idLogradouroOrg"> </label>
		<input type="text" name="logradouro_org" id="idLogradouroOrg" placeholder="Logradouro ()" class="form-control mb-1 mr-sm-2">
            </div>
            <br>
            
            <div class="col-25">    
            <label for="idNumLogradouroOrg"> </label>
                <input type="number" name="num_org" id="idLogradouroOrg" placeholder="Número ()" class="form-control mb-1 mr-sm-2">
            </div>
            <br>
            
            <div class="col-50">    
            <label for="idComplementoOrg"> </label>
        	<input type="text" name="complemento_org" id="idComplementoOrg" placeholder="Complemento ()" 
                 class="form-control mb-1 mr-sm-2">
            </div>        
            <br>
            
            <div class="col-25">    
            <label for="idBairroOrg"> </label>
        	<input type="text" name="bairro_org" id="idBairroOrg" placeholder="Bairro ()" class="form-control mb-1 mr-sm-2">
            </div>
            <br>
        
        </div>
    </div> <!-- fim do "div3" -->   
    <br>
        



        
        
        
        
<?php

    # cria conexão com banco de dados
    //include_once "../../inc/conectabd.php"; // ativar o database
        //include_once "../inc/funcoes.inc.php";  //VERIFICAR
        //monta_organizacao($conn);               // CRIAR FUNÇAO
 

    ?>
    <input type="submit" value="Cadastrar" class="btn btn-primary btn-sm">
    <input type="reset" value="Limpar" class="btn btn-primary btn-sm">
    </form>
        
        
        
        
</body>
</html>
  

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * and open the template in the editor.
 */




/*
  try {
   
  include_once "../inc/conectabd.inc.php";

  echo "<h3>BSGI (PDO)</h3>";
  
  
 
  
  
    } catch (PDOException $e){
      echo "Erro: ". $e->getMessage();
      }
 * 
 */
?> 