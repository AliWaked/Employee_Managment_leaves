<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background: #454d55">
    <form style="width: 50%;margin-left:auto;margin-right:auto; margin-top:70px;" method="post" action="login">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" value="{{old('username')}}" name="username" placeholder="">
            <label for="floatingInput">UserName</label>
            <small>{{ $errors->first('username') }}</small>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="password" placeholder="">
            <label for="floatingInput">Password</label>
            <small>{{ $errors->first('password') }}</small>
        </div>

        <div class="col-12" style="margin-top:15px;">
            <button type="submit" class="btn btn-primary">Sing In</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
