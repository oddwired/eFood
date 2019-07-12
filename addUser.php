<?php
session_start();
if (!isset($_SESSION["session_user"]))
{
    header("location: error.php");
}
include "app/header.php";
include "app/nav.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <a href="booked.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Home Page</a><br><br>
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Create user account</div>
                <div class="panel-body">
                    <div id="msg" style="display: none;" class="alert alert-success">
                        <span class="glyphicon glyphicon-check"></span>
                        <!--message from firebase will appear here...-->
                    </div>
                    <form method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" required="" type="email" name="email" id="email" placeholder="e.g. john@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" required="" type="text" name="password" id="password" placeholder="*******"/>
                        </div>
                        <button class="btn btn-block btn-primary" id="addUser" onclick="handleSignUp()" type="button"><span class="glyphicon glyphicon-plus-sign"></span> add user</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php
include "app/footer.php";
