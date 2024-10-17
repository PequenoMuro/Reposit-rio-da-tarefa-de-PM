<?php
$link = mysql_connect('mysql://root:RCokKOAXawwfIddfXQtNKhtphPNrSBfH@autorack.proxy.rlwy.net:36331/railway');
if (!$link){
	die ('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão feita com sucesso';
mysql_code($link);
?>