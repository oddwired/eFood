<?php
session_start();
if (!isset($_SESSION["session_user"]))
{
    header("location:index.php");
}
$user = $_SESSION["session_user"];
include "app/header.php";
include "app/nav.php";
?>
<div class="container">
    <!--View if session is admin-->
    <?php
    if ($user == "admin")
    {
        ?>
        <div class="well">User account:-<?php echo $user?></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="addUser.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-plus"></span>
                        Add user(s)
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="ViewUser.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-user"></span>
                        View added user(s)
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <?php
    }elseif($user=="manager")
    {
        ?>
        <div class="well">User account:-<?php echo $user?></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="addMenu.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-home"></span>
                        Add menu(s)
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="ViewAddedMenu.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-file"></span>
                        View Added menu(s)
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="booked.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-file"></span>
                        View ordered food item(s)
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <?php
    }else if($user=="delivery"){
        ?>
        <div class="well">User account:-<?php echo $user?></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="booked.php">
                    <div class="thumbnail">
                        <span class="glyphicon glyphicon-file"></span>
                        View customers orders
                    </div>
                </a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "app/footer.php";