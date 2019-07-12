<?php
include "app/header.php";
include "app/nav.php";
if (isset($_GET["menuID"]))
{
    $menuID = $_GET["menuID"];
}
?>
<div class="container">
    <input type="hidden" value="<?php echo $menuID?>" id="key">

    <div id="msgBox" style="display: none">
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-trash"></span>
            <strong>Alert message!</strong>
            Menu item deleted successfully.
        </div>
    </div>
    <div class="text-center">
        <a href="ViewAddedMenu.php">Go Back</a>
    </div>
</div>
    <script>
    const menuID = document.getElementById('key').value;
    const dbRefObject = firebase.database().ref().child('menu');
    dbRefObject.child(menuID).remove();
    document.getElementById('msgBox').style.display="block";
</script>
<?php
include "app/footer.php";
