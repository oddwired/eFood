<?php
include "app/header.php";
include "app/nav.php";
if (isset($_GET["userID"]))
{
    $userID = $_GET["userID"];
}
?>
<div class="container">
    <input type="hidden" value="<?php echo $userID?>" id="key">

    <div id="msgBox" style="display: none">
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-trash"></span>
            <strong>Alert message!</strong>
            User delete successfully.
        </div>
    </div>
    <div class="text-center">
        <a href="ViewUser.php">Go Back</a>
    </div>
</div>
    <script>
    const userID = document.getElementById('key').value;
    const dbRefObject = firebase.database().ref().child('users');
    dbRefObject.child(userID).remove();
    document.getElementById('msgBox').style.display="block";
</script>
<?php
include "app/footer.php";
