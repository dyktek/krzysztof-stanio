<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Od Zera do WebDeva - zgłoszenie na kurs</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
</head>
<body>
<img src="https://scontent-waw1-1.xx.fbcdn.net/v/t31.0-8/12068870_1503802496610316_5806512324136392188_o.jpg?oh=37d16246f9d63bce91e6dfc30c4152ef&oe=5980965F" style="display: block;margin-left: auto;margin-right: auto;width: 100%;">
<h2 style="text-align: center;font-family: 'Oswald', sans-serif;color: #555a78;font-weight: bold;">Nowy formularz zgłoszeniowy</h2>
<div class="emailbody" style="font-family: 'Open Sans', sans-serif;text-align: justify;">
   Cześć, Krzysiek :-P<br>

    ktoś właśnie wypełnił formularz zgłoszenia na szkolenie na Twojej stronie.
    Imię: {{ $senderName }}
    <br>
    Mail: {{ $senderMail }}
    <br>
    Telefon: {{ $senderPhone }}
    <br>
    Opis: {{ $senderMessage}}
    <br>


</div>
</body>
</html>