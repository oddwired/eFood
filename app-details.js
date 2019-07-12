(function () {
    //get the table id
    // const tBody = document.getElementById('tBody');
    const table = document.getElementById('table');
    const uid = document.getElementById('UID').value;
    //get the firebase reference
    const dbRefObject = firebase.database().ref().child('orders').child(uid);
    var tableBody = document.getElementById('tBody');
    var tbodyTotal = document.getElementById('total');
    var summ=0 ;
    //sync object changes using the on method
    dbRefObject.on('value', function (snapshot) {
        snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();
            // ...
            /*console.log(childKey);
            console.log(childData);*/

            /*create a table row and td*/
            var tr = document.createElement('tr');
                tr.innerHTML = "" +
                    "<td>" + childKey + "</td>" +
                    "<td>" + childData.name + "</td>" +
                    "<td>" + childData.quantity + "</td>" +
                    "<td>Ksh." + childData.totalAmount + "/=</td>" +
                    "";
                tr.className="warning";


            tableBody.appendChild(tr);
            table.appendChild(tableBody);
            /*Disable loading button*/
            document.getElementById('visibility').style.display='none';
        });
    });
}());