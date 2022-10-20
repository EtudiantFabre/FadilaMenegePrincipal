
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleMail.css">
    <title>Demande de service réussit</title>
    <link rel="icon" type="image/png" href="/Original.png">
    <style>
        body {
            text-align: center;
            background: rgb(237, 100, 32);
            /*background-image: url('nounou.jpeg');*/
            border-radius: 30px;
            border: black;
        }
    </style>
</head>
<body >
    <h1 class="text-center">Service</h1>
    <p>Bonjour {{$cl->nom}}, nous avons réussi votre demande. Nous la traiterons et ensuite vous envoyerons un mail pour une réponse.</p>
    <!--p>Ensuite, nous vous créerons un mail qui contiendra vos identifiant et mot de passe pour accéder au site.</p-->
    <br>
    <label for="">Merci de vouloir patientez !!!</label>
</body>
</html>
