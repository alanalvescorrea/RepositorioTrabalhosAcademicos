<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



        <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
        <link rel="stylesheet" type="text/css" href="../autocomplete/jquery.autocomplete.css" />
        <script type="text/javascript" src="../autocomplete/jquery.autocomplete.js"></script>


        <script>
            $(document).ready(function() {
                $("#instituicao").autocomplete("autocomplete_instituicao.php", {
                    selectFirst: true
                });
            });
        </script>
    </head>

    <body>
        <input type="text" id="instituicao" name="instituicao" placeholder="" class="input-xlarge" required="">
           <!-- <input name="instituicao" type="text" id="instituicao" size="20"/>-->
    </body>
</html>