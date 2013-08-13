<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
            $(function() {
                var availableTags = [
                    "MATEMÁTICA",
                    "PROBABILIDADE E ESTATÍSTICA",
                    "CIÊNCIA DA COMPUTAÇÃO",
                    "ASTRONOMIA",
                    "FÍSICA",
                    "QUÍMICA",
                    "GEOCIÊNCIAS",
                    "GENÉTICA",
                    "MORFOLOGIA",
                    'FISIOLOGIA',
                    'BIOQUÍMICA',
                    'BIOFÍSICA',
                    'FARMACOLOGIA',
                    'IMUNOLOGIA',
                    'MICROBIOLOGIA',
                    'PARASITOLOGIA',
                    'ECOLOGIA',
                    'OCEANOGRAFIA',
                    'BOTÂNICA',
                    'ZOOLOGIA',
                    'ENGENHARIA CIVIL',
                    'ENGENHARIA SANITÁRIA',
                    'ENGENHARIA DE TRANSPORTES',
                    'ENGENHARIA DE MINAS',
                    'ENGENHARIA DE MATERIAIS E METALÚRGICA',
                    'ENGENHARIA QUÍMICA',
                    'ENGENHARIA NUCLEAR',
                    'ENGENHARIA MECÂNICA',
                    'ENGENHARIA DE PRODUÇÃO',
                    'ENGENHARIA NAVAL E OCEÂNICA',
                    'ENGENHARIA AEROESPACIAL',
                    'ENGENHARIA ELÉTRICA',
                    'ENGENHARIA BIOMÉDICA',
                    'MEDICINA',
                    'NUTRIÇÃO',
                    'ODONTOLOGIA',
                    'FARMÁCIA',
                    'ENFERMAGEM',
                    'SAÚDE COLETIVA',
                    'EDUCAÇÃO FÍSICA',
                    'FONOAUDIOLOGIA',
                    'FISIOTERAPIA E TERAPIA OCUPACIONAL',
                    'AGRONOMIA',
                    'RECURSOS FLORESTAIS E ENGENHARIA FLORESTAL',
                    'ENGENHARIA AGRÍCOLA',
                    'ZOOTECNIA',
                    'RECURSOS PESQUEIROS E ENGENHARIA DE PESCA',
                    'MEDICINA VETERINÁRIA',
                    'CIÊNCIA E TECNOLOGIA DE ALIMENTOS',
                    'DIREITO',
                    'ADMINISTRAÇÃO',
                    'TURISMO',
                    'ECONOMIA',
                    'ARQUITETURA E URBANISMO',
                    'DESENHO INDUSTRIAL',
                    'PLANEJAMENTO URBANO E REGIONAL',
                    'DEMOGRAFIA',
                    'CIÊNCIA DA INFORMAÇÃO',
                    'MUSEOLOGIA',
                    'SERVIÇO SOCIAL',
                    'FILOSOFIA',
                    'TEOLOGIA',
                    'SOCIOLOGIA',
                    'ANTROPOLOGIA',
                    'ARQUEOLOGIA',
                    'HISTÓRIA',
                    'GEOGRAFIA',
                    'PSICOLOGIA',
                    'EDUCAÇÃO',
                    'CIÊNCIA POLÍTICA',
                    'LINGUÍSTICA',
                    'LETRAS',
                    'ARTES',
                    'INTERDISCIPLINAR',
                    'ENSINO',
                    'MATERIAIS',
                    'BIOTECNOLOGIA',
                    'CIÊNCIAS AMBIENTAIS'
                ];
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
        </script>
    </head>
    <body>
        <div class="ui-widget">
            <label for="tags"></label>
            <input type="text" id="tags" name="area" placeholder="" class="input-xlarge" required="">
            <!--<input name="area" id="tags" required=""/>-->
        </div>
    </body>
</html>