<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color{
            background-color: rgb(0, 139, 19);
            color:red 
        }
    </style>
</head>
<body>
    <h1 class="color">Ciao sei stato contattato da PrestoLove .</h1>
    <p>Grazie per averci contattato {{$user_data['name']}}</p>
    <p>Ti contatteremo al più presto </p>
    <h4>Ecco il tuo messaggio :
        {{$user_data['message']}}
    </h4>
</body>
</html>