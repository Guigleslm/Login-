<?php

// Aqui usei i define para definir o número do meu host, usuario, senha e db.

define('HOST' ,'127.0.0.1');
define('USUARIO' ,'root');
define( 'SENHA' ,'');
define('DB' ,'login');

// Conxão feita com o "mysqli" e o uso do "or die" caso a mesma de errado

$conexao = mysqlIi_connect(HOST, USUARIO, SENHA, DB); or die ("Não foi possivel se logar");


 

















?> 