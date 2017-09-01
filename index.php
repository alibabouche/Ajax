<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/jQuery.js"></script>
        <script src="js/main.js"></script>

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <form method="post" class="fomular">
            <li>
                <label for="lastName">Nom: </label>
                <input type="text" name="lastName" id="lastName">
            </li>
            <li>
                <label for="firstName">Prénom: </label>
                <input type="text" name="firstName" id="firstName">
            </li>
            <li>
                <label for="Phone">Téléphone: </label>
                <input type="text" name="phone" id="phone">
            </li>
            <li>
                <input type="button" value="Enregistrer" id="submit">
            </li>
        </form>

        <div id="contactList"></div>
        
    </body>
</html>
