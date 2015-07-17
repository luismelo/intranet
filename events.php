<?php
// lista os eventos
 $json = array();
 // request pra recuperar os eventos
 $requete = "SELECT * FROM evenement ORDER BY id";
 
 // conexão com o bd
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', '');
 } catch(Exception $e) {
 exit('Impossível conectar a base de dados.');
 }
 // executa o request
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 
 // se sucesso, envia o resultado
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 
?>