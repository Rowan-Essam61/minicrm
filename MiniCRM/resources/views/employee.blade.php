<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .card {

            width: 60%;
            margin: auto;
            text-align: center;
            background-image: linear-gradient(to bottom right, #333131, #cabebe);
            padding: 50px;

        }

        button {
            margin-top: 10px;
            width: 50%;
            height: 50px;
            font-size: 20px;
            background-color: white;
            border: 0px;
        }

        button:hover {
            background-color: rgb(49, 48, 48);
            color: white;
            border: 0px;
        }
    </style>
</head>

<body class="antialiased">

    <div class="card">
        <h1>Welcome Employee</h1>
        <button onclick="window.location='{{url('addcust')}}'">Add new Customer</button>
        <button onclick="window.location='{{url('addaction')}}'">Add Action to customer</button>
        <button onclick="window.location='{{url('logout')}}'">Logout</button>
    </div>
</body>

</html>
