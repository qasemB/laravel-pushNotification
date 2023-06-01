<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/bootstrap5/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/fontawesome6/css/all.min.css">
    <title>ارسال اعلان</title>
</head>
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

<body class="row m-0 p-0 justify-content-center align-items-center">
    @if ($errors->any())
        <div class="alert alert-danger" style="direction: rtl">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/showNotifForm" method="POST" class="p-5 col-md-6">
        @csrf
        <input type="number" name="user_code" placeholder="User Code" class="form-control my-1">
        <button class="btn btn-primary my-1" type="submit">submit</button>
    </form>
    <h5 class="text-center text-primary">Enter your personal code</h5>

</body>

</html>
