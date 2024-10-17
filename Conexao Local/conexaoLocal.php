<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link){
	die ('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão feita com sucesso';
mysql_code($link);
?>