<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Auxiliador de Qualidade</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.media.js?v0.92"></script>
    <script type="text/javascript" src="jquery.metadata.js"></script>

    <script type="text/javascript">
        $(function() {
             $('a.media').media({width:800, height:1110});
        });
    </script>

  </head>
  <body>
        <FORM><INPUT Type="button" VALUE="Voltar e pesquisar outro Item" onClick="history.go(-1);return true;"></FORM>
        <br><br>
        <a class="media" href="desenhos_pdf/<?php echo $_GET['cod_item'] ?>.pdf"></a>

  </body>
</html>

