(function () {
    //get the table id
    // const tBody = document.getElementById('tBody');
    const tableOrder = document.getElementById('tableOrder');
    const uid = document.getElementById('key').value;
    //get the firebase reference
    const dbRefObject = firebase.database().ref().child('orders').child(uid);
    var tableBodyOrder = document.getElementById('tBodyOrder');
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
                "<td>" + childData.name + "</td>" +
                "<td>" + childData.quantity + "</td>" +
                "<td>Ksh." + childData.totalAmount + "/=</td>" +
                "";
            tr.className="info";
            tableBodyOrder.appendChild(tr);
            tableOrder.appendChild(tableBodyOrder);
            /*Disable loading button*/
            document.getElementById('visibilityOrder').style.display='none';

        });initPrint();
    });
}());
function initPrint () {
    print();
}
/**
 * Created by VIN on 4/17/2017.
 */
