<!HTML>

<!-- index-org.html -->
<!-- versao 2 - baseado em cadastro_bd_pdo (form-insercao.php) -->

<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilo1-v2.css" rel="stylesheet">

    <title> BSGI - Organização </title>
  <!--
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	-->	
    </head>

<body>
    <header>
  
  	<div id="cab_esq">
		<img class="contain" src="img\BSGI-logo2c.png" align=left width="70%">
	</div>
	<div id="cab_dir">
		<!-- <img src="img\icon3-user.png" align=left> ENORME -->
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

    <form action="insercao_organizacao.php" method="GET">
    <div id="div1">
	<label for="idNomeOrg">
		<input type="text" name="nome_org" id="idNomeOrg" placeholder="Nome da Organização">
	</label>
	<br>        
	<label for="idNomeOrgPai">
		<input type="text" name="id_organizacao_pai" id="idNomeOrgPai" placeholder="Organização-Pai (selecione)">
	</label>
	<br>
        <select id="idTipoOrg"> 
        <!-- <label for="idTipoOrg"> -->   
		<input type="text" select id="id_tipo_org" name="TipoOrg" placeholder="Tipo da Organização (selecione)">
	</select>
    </div>
    <br>

        
    <div id="div2">
           
        <label for="idUFOrg"></label>
                <!-- <input type="text" name="FALTANDO" id="idUFOrg" placeholder="Nome da Organização"> -->
        <br>
        <label for="idCEPOrg">
        	<input type="number" name="CEP_org" id="idCEPOrg" placeholder="CEP">()
        </label>
        <br>        
        <label for="idCidadeOrg">
        	<input type="text" name="id_cidade_org" id="idCidadeOrg" placeholder="Cidade">()
        </label>
        <br>
	<label for="idLogradouroOrg">
		<input type="text" name="logradouro_org" id="idLogradouroOrg" placeholder="Logradouro">()
	</label>	
	<br>
        <label for="idNumLogradouroOrg">
            <input type="text" name="num_org" id="idLogradouroOrg" placeholder="Número">()
        </label>
        <br>
        <label for="idComplementoOrg">
        	<input type="text" name="complemento_org" id="idComplementoOrg" placeholder="Complemento">()
        </label>        
        <br>
        <label for="idBairroOrg">
        	<input type="text" name="bairro_org" id="idBairroOrg" placeholder="Bairro">()
        </label>
        <br>    
        
    </div>
    <br>
        

    <div id="div3">        
	<label for="idEmailOrg">
		<input type="email" name="EmailOrg" id="idEmailOrg" placeholder="E-mail da Organização">()
	</label>	
	<br>
	<label for="idFoneFixoOrg">
		<input type="tel" name="FoneFixoOrg" id="idFoneOrg" placeholder="Fone fixo da Organização">()
	</label>
        <br>
        <label for="idFoneCelOrg">
		<input type="tel" name="FoneCelOrg" id="idFoneOrg" placeholder="Celular da Organização">()
	</label>
	<br> 
    </div>

        
        
        
        
<?php
/*
    # cria conexão com banco de dados
    include_once "../inc/conectabd.php";
    include_once "../inc/funcoes.inc.php";  //VERIFICAR
    monta_organizacao($conn);               // CRIAR FUNÇAO
 
 */
    ?>
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