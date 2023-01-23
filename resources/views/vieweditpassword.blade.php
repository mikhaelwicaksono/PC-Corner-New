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
    @foreach ($user as $p)


    <form class="Forum" method="POST" action="/executedpassword/{{$p->users_id}}" style="background-color:rgb(91, 91, 229)">
        @csrf
        <div class="judul" style="text-align:center;">
            <a>Update Password</a>
                </div>

    <div class="forum-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">{{session('status')}}</div>
        @elseif (session('error')){
                <div class="alert alert-danger" role="alert">{{session('error')}}</div>
        }
        @endif

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Old Password</label>
        <input type="password" name="oldpassword" class="form-control @error('oldpassword')
         is-invalid
        @enderror"
         id="password" placeholder="Old Password" >
        @error('oldpassword')
            <span class="textdanger">{{$message}}</span>
        @enderror
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">New Password</label>
        <input type="password" name="newpassword" class="form-control" id="password"  placeholder="New Password" value={{$p->password}}>
      </div>
      <div class="container">
        <div class="btn-group mx-auto">
      <button type="submit" class="btn btn-primary">Save Update</button>
      <a class="btn btn-primary" href="/home" style="display:inline-block;vertical-align:top; padding-left:0.7%; color:white; background-color:rgb(56, 77, 213)">Back</a>
    </div>
</div>
    </form>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
