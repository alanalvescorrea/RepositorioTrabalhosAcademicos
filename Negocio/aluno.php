<!-- TWITTER BOOTSTRAP CSS -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">

<!-- TWITTER BOOTSTRAP JS -->
<script src="../js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
<link rel="stylesheet" type="text/css" href="../autocomplete/jquery.autocomplete.css" />
<script type="text/javascript" src="../autocomplete/jquery.autocomplete.js"></script>

<script>
    $(document).ready(function() {
        $("#aluno").autocomplete("autocomplete_aluno.php", {
            selectFirst: true
        });
    });
</script>


<body>
    <input id="aluno" type="text" id="titulo" name="aluno" placeholder="" class="input-xlarge" required="">
</body>
