<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<body>
    <form action="" method="post">
        @method('patch')
        @csrf
        <input type="password" name="new_password">
        <input type="password" name="new_password_confirmation">
        <button type="submit">Change</button>
    </form>
</body>
</html>