(function () {
    //get the table id
    // const tBody = document.getElementById('tBody');
    const table = document.getElementById('table');

    //get the firebase reference
    const dbRefObject = firebase.database().ref().child('orders');
    var tableBody = document.getElementById('tBody');

    //sync object changes using the on method
    dbRefObject.once('value', function (snapshot) {
        snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();
            // ...
            console.log(childKey);
            console.log(childData);

            /*create a table row and td*/
            var tr = document.createElement('tr');
            tr.innerHTML = "" +
                "<td><img class='img-circle' src='images/square-image.png' height='20' width='20'/></td>" +
                "<td>" + childKey + "</td>" +
                "<td><a href=individualOrder.php?userID=" + childKey + " class='btn btn-primary'><span class='glyphicon glyphicon-user'></span> View Order</a>" +
                " <a href=receipt.php?userID=" + childKey + " class='btn btn-warning'><span class='glyphicon glyphicon-print'></span> Print Order Receipt</a></td>" +
                "";
            tr.className='info';
            tableBody.appendChild(tr);
            table.appendChild(tableBody);
            /*Disable loading button*/
            document.getElementById('visibility').style.display='none';

        });
    });
}());