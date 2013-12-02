<!DOCTYPE html>
<html>
    <head>

        <link type="text/css" href="autocomplete/css/jquery-ui-1.8.5.custom.css" rel="Stylesheet" />
        <script src="autocomplete/js/jquery-1.4.2.min.js" type="text/javascript"></script>
        <script src="autocomplete/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function()
            {
                $('#autor').autocomplete(
                        {
                            source: "autorAutocomplete.php",
                            minLength: 3
                        });
            });
        </script>

    </head>

    <body>
        <p><input type="text" name='autor' id="autor" class="input-xxlarge"/></p>
    </body>
</html>