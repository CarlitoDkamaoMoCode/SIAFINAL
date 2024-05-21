@extends('layout')

@section('content')
    <div class="container">
        <div id="wrapper" class="text-center py-5">
            <h1 class="display-4 mb-4">QRCode Scanner</h1>
            <div id="reader" class="mx-auto"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode@latest/dist/html5-qrcode.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <script>
        const config = {
            fps: 30,
            qrbox: 200
        }

        const scanner = new Html5QrcodeScanner("reader", config)

        const success = (data) => {
            alert(data)
        }

        const error = (err) => {
            console.log(err);
        }

        scanner.render(success, error);
    </script>

    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Times New Roman', Times, serif;
            color: #343a40;
        }
        #wrapper {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #212529;
        }
        #reader {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 1rem;
            border: 1px solid #ced4da;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        #reader video {
            border-radius: 10px;
        }
    </style>
@endsection
