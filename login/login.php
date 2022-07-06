<?php
    error_reporting(E_ALL ^ E_WARNING);
    require_once 'library.php';
    if(chkLogin()){
        $id = $_SESSION["id"];
        header("Location: ../agendamentos/agendamentos.php?id=$id");
    }
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container d-flex justify-content-center mt-5 pt-5">
            <div class="container-sm w-25 border">
                <form class="form-horizontal mt-5" method="post" action="login_action.php">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" name="pass" placeholder="Password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-default my-2 me-5">Sign in</button>
                    <a href='register.php' class="ms-5">Register</a>
                </form>
            </div>
        </div>
    </body>
</html>