<?php
include "app/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="panel-title text-center">
                    <h1>Rental web application</h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Login</div>
                    <div class="panel-body">
                        <div class="alert alert-danger fade in alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Message!</strong> Wrong username and password
                        </div>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Username..."/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password..."/>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" name="login" value="Login"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
<?php
include "app/footer.php";