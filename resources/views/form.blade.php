<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-offset-4 col-lg-4">
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">
                            {{$error}}
                        </p>
                   @endforeach
                @endif
                <form action="{{route('form')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" id="" placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="" placeholder="correo electronico">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
