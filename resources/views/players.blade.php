<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Player List</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Times New Roman', Times, serif;
            color: #343a40;
        }
        .card {
            border: 1px solid #ced4da;
            transition: box-shadow 0.3s, transform 0.3s;
            background-color: #ffffff;
            padding: 1rem;
            border-radius: 10px;
        }
        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #212529;
        }
        .card-text {
            font-size: 1.1rem;
            color: #495057;
        }
        .btn-primary {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-primary:hover {
            background-color: #00376d;
            border-color: #002752;
        }
        .header-buttons {
            padding: 1rem 0;
            background-color: #e9ecef;
        }
        .container {
            padding-top: 2rem;
        }
        .icon {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }
        .header-buttons .btn-outline-secondary {
            color: #343a40;
            border-color: #343a40;
        }
        .header-buttons .btn-outline-secondary:hover {
            background-color: #343a40;
            color: #ffffff;
        }
        .header-buttons form, .header-buttons a {
            margin: 0 10px;
        }
        .header-buttons a {
            text-decoration: none;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ced4da;
            margin-bottom: 1rem;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-between header-buttons gap-2 p-4">
        <div class="d-flex gap-2">
            <form action="{{ route('player.import') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2 shadow-sm p-3 bg-white rounded">
                @csrf
                <input type="file" name="csv_file" class="form-control">
                <button type="submit" class="btn btn-primary btn-sm mt-2">Import CSV</button>
            </form>
            <a href="{{ route('scanner') }}" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2">
                <svg id="Layer_1" data-name="Layer 1" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.61 122.88">
                    <title>scan</title>
                    <path d="M23.38,0h13V11.15h-13a12.22,12.22,0,0,0-8.64,3.57l0,0a12.22,12.22,0,0,0-3.57,8.64V39.32H0V23.38A23.32,23.32,0,0,1,6.86,6.89l0,0A23.31,23.31,0,0,1,23.38,0ZM3.25,54.91H119.36a3.29,3.29,0,0,1,3.25,3.27V64.7A3.29,3.29,0,0,1,119.36,68H3.25A3.28,3.28,0,0,1,0,64.7V58.18a3.27,3.27,0,0,1,3.25-3.27ZM90.57,0h8.66a23.28,23.28,0,0,1,16.49,6.86v0a23.32,23.32,0,0,1,6.87,16.52V39.32H111.46V23.38a12.2,12.2,0,0,0-3.6-8.63v0a12.21,12.21,0,0,0-8.64-3.58H90.57V0Zm32,81.85V99.5a23.46,23.46,0,0,1-23.38,23.38H90.57V111.73h8.66A12.29,12.29,0,0,0,111.46,99.5V81.85Zm-86.23,41h-13A23.32,23.32,0,0,1,6.86,116l-.32-.35A23.28,23.28,0,0,1,0,99.5V81.85H11.15V99.5a12.25,12.25,0,0,0,3.35,8.41l.25.22a12.2,12.2,0,0,0,8.63,3.6h13v11.15Z"/>
                </svg>
            </a>
        </div>
        <div>
            <a href="/players/csv-all" target="_blank" class="btn btn-primary rounded-2">CSV</a>
            <a href="/players/pdf" target="_blank" class="btn btn-primary rounded-2">Export</a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach($players as $player)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $player->image_url }}" alt="{{ $player->name }}" class="card-img-top">
                        <div class="card-body text-center">
                            {!! QrCode::size(100)->generate(Request::url() . '/players/' . $player->id) !!}
                            <h5 class="card-title mt-2">{{ $player->name }}</h5>
                            <p class="card-text">{{ $player->jerseynumber }}</p>
                            <p class="card-text">{{ $player->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
