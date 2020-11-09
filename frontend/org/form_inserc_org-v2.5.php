<!HTML>

<!-- form_inserc_org.php 
     formulario de insercao das organizaçoes
<!-- versao 2.5 - baseado em cadastro_bd_pdo (form-insercao.php) -->

<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilo1-v2.5.css" rel="stylesheet">
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
    <form action="insercao_organizacao-v1.2.php" method="GET">
    <div id="div1">
        <span>
	<label for="idNomeOrg">
		<input type="text" name="nome_org" id="idNomeOrg" placeholder="Nome da Organização" class="form-control mb-1 mr-sm-2">
	</label>
	<br>   
   
        <label for="idTipoOrg"> 
        <select name="TipoOrg" id="idTipoOrg" class="form-control mb-1 mr-sm-2">
           
		<!-- <input type="text" select id="id_tipo_org" name="TipoOrg" placeholder="Tipo da Organização (selecione)" 
                 class="form-control mb-1 mr-sm-2"> -->
            <optgroup label="Tipo da Organização:">
            <option value="">Tipo da Organização (selecione)</option> 
            <option value="Bloco">Bloco</option>
            <option value="Comunidade">Comunidade</option>
            <option value="Distrito">Distrito</option>
            </optgroup>
	</select>
            
	<label for="idNomeOrgPai">
		<input type="text" name="id_organizacao_pai" id="idNomeOrgPai" placeholder="Organização-Pai (selecione)" 
                 class="form-control mb-1 mr-sm-2">
	</label>
	<br>            
        </span>
    </div>


    <div id="div2">        
	<label for="idFoneFixoOrg">
		<input type="tel" name="tel_fixo_org" id="idFoneOrg" placeholder="Fone fixo da Organização ()" 
                 class="form-control mb-1 mr-sm-2">
	</label>
        <br>
        <label for="idFoneCelOrg">
		<input type="tel" name="tel_cel_org" id="idFoneOrg" placeholder="Celular da Organização ()" 
                 class="form-control mb-1 mr-sm-2">
	</label>
	<br> 
	<label for="idEmailOrg">
		<input type="email" name="email_org" id="idEmailOrg" placeholder="E-mail da Organização ()" 
                 class="form-control mb-1 mr-sm-2">
	</label>	
	<br>        
    </div>
    
    <div id="div3">
           
        <label for="idUFOrg"></label>
                <!-- <input type="text" name="FALTANDO" id="idUFOrg" placeholder="Nome da Organização"> -->
        <br>
        <label for="idCEPOrg">
        	<input type="number" name="CEP_org" id="idCEPOrg" placeholder="CEP ()" class="form-control mb-1 mr-sm-2">
        </label>
        <br>        
        <label for="idCidadeOrg">
        	<input type="text" name="id_cidade_org" id="idCidadeOrg" placeholder="Cidade ()" class="form-control mb-1 mr-sm-2">
        </label>
        <br>
	<label for="idLogradouroOrg">
		<input type="text" name="logradouro_org" id="idLogradouroOrg" placeholder="Logradouro ()" class="form-control mb-1 mr-sm-2">
	</label>	
	<br>
        <label for="idNumLogradouroOrg">
            <input type="number" name="num_org" id="idLogradouroOrg" placeholder="Número ()" class="form-control mb-1 mr-sm-2">
        </label>
        <br>
        <label for="idComplementoOrg">
        	<input type="text" name="complemento_org" id="idComplementoOrg" placeholder="Complemento ()" 
                 class="form-control mb-1 mr-sm-2">
        </label>        
        <br>
        <label for="idBairroOrg">
        	<input type="text" name="bairro_org" id="idBairroOrg" placeholder="Bairro ()" class="form-control mb-1 mr-sm-2">
        </label>
        <br>
        
    </div>
    <br>
        



        
        
        
        
<?php

    # cria conexão com banco de dados
    //include_once "../../inc/conectabd.php"; // ativar o database
        //include_once "../inc/funcoes.inc.php";  //VERIFICAR
        //monta_organizacao($conn);               // CRIAR FUNÇAO
 

    ?>
    <input type="submit" value="Salvar" >
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