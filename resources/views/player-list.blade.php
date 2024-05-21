<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List PDF</title>
    <style>

    </style>
</head>
<body>
    <h1>Playerlist</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>QR Code</th>
                <th>Name</th>
                <th>Jersey Number</th>
                <th>Position</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($player->id)) }}" alt="QR Code"></td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->jerseynumber }}</td>
                    <td>{{ $player->position }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
