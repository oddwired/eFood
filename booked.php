<?php
include "app/header.php";
include "app/nav.php";
?>
    <div class="header">
        <h4 class="text-center">Food Orders</h4>
    </div>
    <div class="ui container">
        <div id="tablePopulate">
            <a href="default.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Home Page</a><br><br>
            <table class="table table-bordered" id="table">
                <thead>
                <tr class="bg-primary">
                    <th>User Avatar:</th>
                    <th>UserID:</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="tBody">
                <tr id="visibility" class="warning">
                    <td colspan="4" class="text-center">
                        Retrieving records....
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="app.js"></script>
<?php
include "app/footer.php";