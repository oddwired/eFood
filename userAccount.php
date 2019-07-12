<?php
include "app/header.php";
include "app/nav.php";
if (isset($_GET["userID"]))
{
    $userID = $_GET["userID"];
}
?>
    <input type="hidden" value="<?php echo $userID?>" id="key">
    <div class="ui container">
        <div id="tablePopulate">
            <a href="booked.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Home Page</a><br><br>
            <table class="table table-bordered" id="table">
                <thead>
                <tr class="info">
                    <th>Name:</th>
                    <th>Email:</th>
                    <th>Phone:</th>
                </tr>
                </thead>
                <tbody id="tBody">
                <tr id="visibility" class="warning">
                    <td colspan="3" class="text-center">
                        Searching for user records....
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="app-user-accounts.js"></script>
<?php
include "app/footer.php";