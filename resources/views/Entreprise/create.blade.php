<!DOCTYPE html>
<html lang=" str_replace('_', '-', app()->getLocale()) ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href=" asset('public/css/style.css') ">
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            Session::get('success')
        </div>
        @endif


        <br />
        <h1>Formulaire de création d'Entreprise</h1>
        <br />

        <form action="add" method="post" action=" action('EntrepriseController@AddEntreprise') ">

            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Society's name" name="name" id="name">
                <span style="color:red">@error('name'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Society's email" name="email"id="email">
                <span style="color:red">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Society's phone" name="phone"
                    id="phone">
                <span style="color:red">@error('phone'){{ $message }} @enderror</span>    
            </div>

            <div class="form-group">
                <label>Ville</label>
                <input type="text" class="form-control" placeholder="Society's city" name="ville"
                    id="ville">
                <span style="color:red">@error('ville'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>code_postal</label>
                <input class="form-control" placeholder="Society's postal code" name="code_postal" id="code_postal">
                <span style="color:red">@error('code_postal'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>rue</label>
                <input class="form-control" placeholder="Society's street" name="rue" id="rue">
                <span style="color:red">@error('rue'){{ $message }} @enderror</span>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>