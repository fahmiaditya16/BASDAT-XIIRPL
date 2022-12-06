<html>
    <head>
        <title>Menggunakan Metode Post</title>
    </head>
    <body>
        <h1>Menggunakan Metode POST</h1>
        <form method="POST">
            <div>
                <label>email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>passwordl</label>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "email = {$email} <br>";
            echo "password = {$password}";
            ?>
        </form>
    </body>
</html>