
<?php

// Para montar compartilhamento
//  mount -t cifs -o guest \\\\192.168.1.251\\desenhos_pdf /var/www/html/pdf/desenhos_pdf/
// biblioteca http://jquery.malsup.com/media/
// Adicionar as seguintes entradas no /etc/sudoers
//
// # Permissao para o usuario apache executar comandos do root sem senha
// apache ALL=(root) NOPASSWD: /bin/mount
// # Desabilita o requiretty para o usuario apache
// Defaults:apache !requiretty

$verifica_montagem = shell_exec('mount | grep desenhos_pdf | wc -l');

if($verifica_montagem != 1){
        $monta = shell_exec('sudo -u root mount -t cifs -o guest \\\\\\\\192.168.1.251\\\\\\desenhos_pdf /var/www/html/pdf/desenhos_pdf/ 2>&1');
        if($monta){
          echo "Falha ao acessar arquivo, avise o TI<br>";
        }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Auxiliador de Qualidade</title>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.media.js?v0.92"></script>
    <script type="text/javascript" src="jquery.metadata.js"></script>
  </head>
  <body>

<form method="get" id="buscar" enctype="multipart/form-data" action="mostra_pdf.php">
    <label for="name" class="overlay"><span>Código Item</span></label>
    <input type="text" name="cod_item" id="cod_item" />

    <input type="submit" value="Buscar" />
</form>

  </body>
</html>
