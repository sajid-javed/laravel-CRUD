
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Page Title</title>
</head>
<body>

<h1>Hi this is bryan from Techsols</h1>
<p>need any service ?</p>

    
<?php
$users = App\users::all();

foreach ($users as $user) {
//    echo $user->id;
    echo $user->name;
    echo $user->email;
//    echo $user->email_verified_at;
//    echo $user->password;
}
    ?>
</body>
</html>
