<?php
include "app/header.php";
include "app/nav.php";
$uid = isset($_GET['userID']) ? $_GET['userID'] : '';
?>
    <div class="header">
        <h4 class="text-center">Food Order(s) For User: <?php echo $uid?></h4>
    </div>
    <input type="hidden" id="UID" name="uid" value="<?php echo $uid?>"/>
    <div class="ui container">
        <div id="tablePopulate">
            <a href="booked.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Food Orders</a><br><br>
            <table class="table table-bordered" id="table">
                <thead>
                <tr class="info">
                    <th>OrderID:</th>
                    <th>Food Name:</th>
                    <th>Quantity:</th>
                    <th>Total Amount:</th>
                </tr>
                </thead>
                <tbody id="tBody">
                <tr id="visibility" class="warning">
                    <td colspan="4" class="text-center">
                        Retrieving records...
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="app-details.js"></script>
<?php
include "app/footer.php";
