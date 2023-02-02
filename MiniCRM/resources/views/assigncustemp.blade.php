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
            .card{

                width: 60%;
                margin: auto;
                text-align: center;

            }
            .card-body{
                background-image: linear-gradient(to bottom right,#333131, #cabebe);
                padding: 50px;
            }
            form input{
                height: 20px;
            }
            button{
                width: 20%;
                height: 35px;
                font-size: 20px;
                background-color: white;
                border: 0px;
            }
            button:hover{
                background-color: rgb(49, 48, 48);
                color: white;
                border: 0px;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="card">
            <div class="card">
                <h1>Assign Customers to employee</h1>
                <div class="card-body">
                    <form name="assigncustomer" id="assigncustomer" action="{{url('assigncustomer')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <h3 >Employee ID</h3>
                        <input type="number" id="empid" name="empid" class="form-control" required="">
                    </div><br>
                    <div class="form-group">
                        <h3 >Customer ID</h3>
                        <input type="number" name="custid" id="custid" class="form-control">
                    </div><br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
