<html>
<head>
    <title>Ma Formulaire</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
</head>
<body>
<form action="submit.php" method= "POST" role="form">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" required>
            <div class="valid-feedback">
                thank you
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<script type="text/javascript" src="script.js"></script>
</body>
</html>