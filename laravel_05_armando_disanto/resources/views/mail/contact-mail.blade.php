<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ciao, {{ $username }}</h1>
    <h3>Grazie di averci contattato</h3>
    <p>Questo e' il tuo messaggio</p>
    <ul>
        <li>email: {{ $useremail }}</li>
        <li>Messaggio: {{ $usermessage }}</li>
    </ul>
    <h2>Ti risponderemo al piu' presto!</h2>
</body>

</html>
