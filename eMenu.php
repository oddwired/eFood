<?php
session_start();
if (!isset($_SESSION["session_user"]))
{
    header("location: error.php");
}
include "app/header.php";
include "app/nav.php";
$itemkey = isset($_GET['menuID'])?$_GET['menuID']:'';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="booked.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Home Page</a><br><br>
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> add rentals here</div>
                    <div class="panel-body">
                        <div id="msg" style="display: none;" class="alert alert-success">
                            <span class="glyphicon glyphicon-check"></span>
                            <!--message from firebase will appear here...-->
                        </div>
                        <form method="post" autocomplete="off" name="myMenuForm">
                            <div class="form-group">
                                <label for="email">Menu item name:</label>
                                <input class="form-control" required="" type="text" name="name" id="name" placeholder="e.g. Menu item name"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Qty:</label>
                                <input class="form-control" required="" type="text" name="qty" id="qty" placeholder="Qty"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Price:</label>
                                <input class="form-control" required="" type="text" name="price" id="price" placeholder="Price"/>
                            </div>
                            <input type="hidden" id="itemKey" value="<?php echo $itemkey?>">
                            <button class="btn btn-block btn-primary" id="addRentals" onclick="editFood()" type="button"><span class="glyphicon glyphicon-plus-sign"></span> add rental</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
<?php
include "app/footer.php";
