<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="header_logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Faculty</title>
</head>
<body>
    <h1 style="padding: 20px;font-weight:bold">Department of Computer Science and Engineering</h1>
    <form action="" style="padding:20px">
        <div class="form-group">
            <input type="search" name="search" class="form-control" placeholder="Search by name and email.." value="{{$search}}">
        </div>
        <button class="btn btn-primary" style="margin-top: 10px">Search</button>
    </form>
    <div class="card-container">
   @foreach ($data as $item)

        <div class="card bg-blue" style="width: 18rem;">
            <img class="card-img-top" src="header_logo.png" alt="Card image cap" height="150px" width="auto">
            <div class="card-body">
            <p class="card-text" style="font-weight: bold">{{$item->name}}</p>
            </div>
            <div class="card-body">
            <h5 class="card-title">{{$item->designation}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->acronym}}</h6>
            <a href="mailto:{{$item->email}}" class="card-link">Email</a>
            <a href="#" class="card-link">Lab Page</a>
            </div>
        </div>
     

    @endforeach

</div>
</body>
</html>