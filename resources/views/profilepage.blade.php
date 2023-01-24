<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>

    @foreach ($profile as $b)

    <div class="container" >
    <div class="card mx-auto" style="width: 30rem; text-align:center; justify-content:center">
        <div class = "title">

        <a> Profile Data </a>
         </div>
        <a>Username        : {{$b->username}}</a>
        <a>Email           : {{$b->email}}</a>
        <a>Address         : {{$b->address}}</a>
        <a>Phone           : {{$b->phonenumber}}</a>
        <a></a>
        <div class="btn-group">
            <a href="/updatepassword/{{$b->users_id}}" class="btn btn-secondary" style="display:inline-block;vertical-align:top; padding-left:0.7%; color:white; background-color:rgb(56, 77, 213); justify-content:center">Edit Password</a>
            <a href="/editprofile/{{$b->users_id}}" class="btn btn-primary" style="display:inline-block;vertical-align:top">Edit Profile</a>
        </div>
    </div>
</div>
  @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
