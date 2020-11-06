<?php 
  //insercao_organizacao.php
  //efetua inclusao na tabela Organizacao informado em form_insercao.php


  //$variavel1 = $_GET["variavel1"];
  //$variavel2 = $_GET["variavel2"];
  //$UF_org = $_GET["UF_org"];      // ESTÁ FALTANDO
  
  $id_organizacao = $_GET["id_organizacao"];
  $id_tipo_org = $_GET["id_tipo_org"];
  $id_organizacao_pai = $_GET["id_organizacao_pai"];
  $nome_org = $_GET["nome_org"];
  $tel_fixo_org = $_GET["tel_fixo_org"];
  $tel_cel_org = $_GET["tel_cel_org"];
  $email_org = $_GET["email_org"];
  $CEP_org = $_GET["CEP_org"];
  $id_cidade_org = $_GET["id_cidade_org"];
  $logradouro_org = $_GET["logradouro_org"];
  $num_org = $_GET["num_org"];
  $complemento_org = $_GET["complemento_org"];
  $bairro_org = $_GET["bairro_org"];
  
  
  try {
  include_once "../inc/conectabd.php";
  

  $query = "INSERT INTO tb_organizacao 
      (id_organizacao, id_tipo_org, id_organizacao_pai, nome_org, tel_fixo_org, tel_cel_org, email_org, 
      CEP_org, id_cidade_org, logradouro_org, num_org, complemento_org, bairro_org) 
      values (:id_organizacao, :id_tipo_org, :id_organizacao_pai, :nome_org, :tel_fixo_org, :tel_cel_org, :email_org, 
      :CEP_org, :id_cidade_org, :logradouro_org, :num_org, :complemento_org, :bairro_org);";
  
  $stmt = $conn->prepare($query);
  $stmt->bindValue(":id_organizacao", $id_organizacao, PDO::PARAM_INT);
  $stmt->bindValue(":id_tipo_org", $id_tipo_org, PDO::PARAM_INT);
  $stmt->bindValue(":id_organizacao_pai", $id_organizacao_pai, PDO::PARAM_INT);
  $stmt->bindValue(":nome_org", $nome_org, PDO::PARAM_STR);
  $stmt->bindValue(":tel_fixo_org", $tel_fixo_org, PDO::PARAM_INT);
  $stmt->bindValue(":tel_cel_org", $tel_cel_org, PDO::PARAM_INT);
  $stmt->bindValue(":email_org", $email_org, PDO::PARAM_STR);
  $stmt->bindValue(":CEP_org", $CEP_org, PDO::PARAM_INT);
  $stmt->bindValue(":id_cidade_org", $id_cidade_org, PDO::PARAM_INT);
  $stmt->bindValue(":logradouro_org", $logradouro_org, PDO::PARAM_STR);
  $stmt->bindValue(":num_org", $num_org, PDO::PARAM_INT);
  $stmt->bindValue(":complemento_org", $complemento_org, PDO::PARAM_STR);
  $stmt->bindValue(":bairro_org", $bairro_org, PDO::PARAM_STR);
  
  //$stmt->bindValue(":variavel1", $variavel1, PDO::PARAM_INT);
  //$stmt->bindValue(":variavel1", $variavel1, PDO::PARAM_STR);
  $stmt->execute();
  
  echo "Inclusão efetuada com sucesso";
  
  } catch (PDOException $e) {
      echo "Erro: ". $e->getMessage();
  }
	  
  
?>  