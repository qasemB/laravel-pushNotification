<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap5/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/fontawesome6/css/all.min.css">
    <title>Notify</title>
</head>
<body  class="row m-0 p-0 justify-content-center align-items-center">
    <style>
        body {
            margin: 0;
            font-family: "BYekan" !important;
            background: url(../assets/images/laptop.jpeg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <form action="/admin/sendNotif/{{$sub->id}}" method="POST" class="p-5 col-md-6">
        @csrf
        Sub #{{$sub->user_code}}
        <input type="text" name="title" placeholder="title" class="form-control my-1">
        <input type="text" name="body" placeholder="body" class="form-control my-1">
        <input type="text" name="url" placeholder="url" class="form-control my-1">
        <button class="btn btn-primary my-1" type="submit">send</button>
    </form>

    <h5 class="text-center text-primary">Enter your notification info</h5>
</body>
</html>
