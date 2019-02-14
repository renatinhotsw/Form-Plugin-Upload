 <!doctype html>
 <html>
   <head>
     <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
      </script>
      <script src="http://malsup.github.io/jquery.form.js"></script>


     <meta charset="utf-8">
     <title>Upload + ajax</title>
   </head>
   <body>

     <form id="formulario" method="post" action="teste.php" role="form" enctype="multipart/form-data">

    <legend>Formulário</legend>

    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" type="text" name="descricao" required autofocus/>
    </div>

     <input name="arquivo" type="file" />

    <input id="enviar" class="btn btn-primary" type="submit" value="Enviar" data-loading-text="Enviando..."/>

</form>

<script type="text/javascript">

$( document ).ready(function() {

  // Quando enviado o formulário
$('#formulario').ajaxForm(function (resposta) {
    console.log(resposta);
});

});

</script>






   </body>
 </html>
