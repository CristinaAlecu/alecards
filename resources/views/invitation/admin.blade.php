<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin RSVP</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Lista RSVP-uri</h1>

    <table>
        <thead>
            <tr>
                <th>Nume</th>
                <th>Prezenta</th>
                <th>Persoane</th>
                <th>Copii</th>
                <th>Mesaj</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rsvps as $rsvp)
                <tr>
                    <td>{{ $rsvp->nume }}</td>
                    <td>{{ $rsvp->prezenta ? 'Da' : 'Nu' }}</td>
                    <td>{{ $rsvp->persoane }}</td>
                    <td>{{ $rsvp->copii }}</td>
                    <td>{{ $rsvp->mesaj }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
