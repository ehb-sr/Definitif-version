<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<h2>Contact Form</h2>
<div>Someone just contacted us:
</div>
<div> From: {{ $voornaam }}  {{ $familienaam }}</div>

<div> Email to reply: {{ $replyto }}</div>

<div> Departement: {{ $departement }}</div>

<div> Subject: {{ $subject }}</div>

<div> Message: {{ $emailmessage }} </div>
</body>
</html>