<!DOCTYPE html>
<html>
<head>
    <title>RSVP Confirmare</title>
</head>
<body>
    <h1>Confirmare nouă RSVP</h1>
    <p><strong>Nume:</strong> {{ $details['nume'] }}</p>
    <p><strong>Va participa:</strong> {{ $details['prezenta'] ? 'Da' : 'Nu' }}</p>
    <p><strong>Număr de persoane:</strong> {{ $details['persoane'] }}</p>
    <p><strong>Număr de copii:</strong> {{ $details['copii'] }}</p>
    <p><strong>Mesaj:</strong> {{ $details['mesaj'] }}</p>
</body>
</html>
