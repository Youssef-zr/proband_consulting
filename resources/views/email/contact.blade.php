<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
</head>
<body>
    <h1>Proband Consulting Contact</h1>
    <h3>Informations sur l'expéditeur du message</h3>
    <ul>
        <ul style="padding-left: 10px !important">
            <li>Nom du client => {{$details['name']}}</li>
            <li>Adress Email => {{$details['email']}}</li>
            <li>Numéro du téléphone => {{$details['phone']}}</li>
            <li>Sujet => {{$details['subject']}}</li>
            <li>Message => {{$details['msg']}}</li>
        </ul>
    </ul>
</body>
</html>