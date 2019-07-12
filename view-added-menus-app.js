(function () {
    //get the table id
    // const tBody = document.getElementById('tBody');
    const table = document.getElementById('table');

    //get the firebase reference
    const dbRefObject = firebase.database().ref().child('menu');
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
                "<td>" + childData.name + "</td>" +
                "<td>" + childData.qty + "</td>" +
                "<td>" + childData.price + "</td>" +
                "<td><a href='deleteMenu.php?menuID=" + childKey + "' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>" +
                "<td><a href='eMenu.php?menuID=" + childKey + "' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a></td>" +
                "";
            tr.className='warning';
            tableBody.appendChild(tr);
            table.appendChild(tableBody);
            /*Disable loading button*/
            document.getElementById('visibility').style.display='none';
        });
    });
}());
