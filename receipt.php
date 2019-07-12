<?php
include "app/header.php";
$uid = isset($_GET['userID']) ? $_GET['userID'] : '';
?>
    <input type="hidden" id="key" value="<?php echo $uid?>"/>
    <div class="container">
    <div class="text-center">
        <h3>eFood Ordering</h3>
        <p>(+254) 712333444</p>
        <p>PO BOX 12121</p>
        <p>Once good delivered cannot be returned.</p>
    </div>
    <div class="well">
        <h4><span class="glyphicon glyphicon-user"></span> Personal Details:</h4>
    </div>
    <table class="table table-bordered" id="table">
        <thead>
        <tr class="bg-primary">
            <th>Name:</th>
            <th>Address:</th>
            <th>Phone Number:</th>
        </tr>
        </thead>
        <tbody id="tBody">
        <tr id="visibility">
            <td colspan="3" class="text-center">
                Searching for user records....
            </td>
        </tr>
        </tbody>
    </table>
</div>
    <script src="custom-receipt-js.js"></script>
    <div class="container"  >
        <div class="well">
            <h4><span class="glyphicon glyphicon-shopping-cart"></span> Order Details:</h4>
        </div>
        <table class="table table-bordered" id="tableOrder">
            <thead>
            <tr class="bg-primary">
                <th>Item Name:</th>
                <th>Quantity:</th>
                <th>Total:</th>
            </tr>
            </thead>
            <tbody id="tBodyOrder">
            <tr id="visibilityOrder">
                <td colspan="3" class="text-center">
                    Searching for order records....
                </td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-6">
                <label>Receiver Sign:</label>__________________________
            </div>
            <div class="col-sm-6">
                <label>Deliverer Sign:</label>__________________________
            </div>
        </div>
    </div>
    <script src="custom-receipt-orders-js.js"></script>
<?php
include "app/footer.php";