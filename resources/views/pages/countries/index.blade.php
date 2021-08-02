<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">
            <table class="table table-striped table-dark">
                <tr>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Population</th>
                    <th>Is_Nato</th>
                </tr>
            @foreach($countries as $country)
                <tr>
                    <td>{{$country->name}}</td>
                    <td>{{$country->capital}}</td>
                    <td>
                        
                        @if($country->population >= 1000000)
                           {{$country->population / 1000000 . "M"}}
                        
                        @elseif($country->population >= 1000000000)
                            {{$country->population / 1000000000 . "B"}}

                        @endif
                    </td>
                    <td>
                        @if($country->is_nato)
                           <p class="bg-success text-center">+</p> 
                        @else
                            <p class="bg-danger text-center">-</p> 
                        @endif
                    </td>
                </tr>
            @endforeach
            </table>

    </div>
</body>
</html>