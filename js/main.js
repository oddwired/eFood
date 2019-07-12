
/**
 * Handles the sign up button press.
 */

'use strict';

function handleSignUp() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (email.length < 4) {
        alert('Please enter an email address.');
        return;
    }
    if (password.length < 4) {
        alert('Please enter a password.');
        return;
    }
    // Sign in with email and pass.
    // [START createwithemail]
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
            alert('The password is too weak.');
        } else {
            alert(errorMessage);
        }
        console.log(error);
        // [END_EXCLUDE]
    });
    // [END createwithemail]
    var msg = document.getElementById("msg");
    msg.textContent = 'account created successfully!';
    msg.style.display = "block";
    email='';
    password='';
}

function handleFood() {
    var name = document.getElementById("name").value;
    var qty = document.getElementById("qty").value;
    var price = document.getElementById("price").value;
    var category = document.getElementById("category").value;

    if (name.length < 3)
    {
        alert ("Enter name of the menu item");
        return ;
    }
    if (qty.length <= 0)
    {
        alert ("Enter qty");
        return ;
    }
    if (price.length < 2)
    {
        alert ("Enter price of the menu item");
        return ;
    }
    // Get a reference to the database service
    var database = firebase.database();
    function writeUserData(name, qty, price,category) {
        database.ref('menu/').push({
            name:name,
            qty:qty,
            price:price,
            category:category
        });
    }
    writeUserData(name,qty,price,category);
    var msg = document.getElementById("msg");
    msg.textContent = 'Menu item added successfully!';
    msg.style.display = "block";
    var menuForm = document.forms["myMenuForm"];
    menuForm.reset();
}

function editFood() {
    var itemKey = document.getElementById("itemKey").value;
    var name = document.getElementById("name").value;
    var qty = document.getElementById("qty").value;
    var price = document.getElementById("price").value;

    if (name.length < 3)
    {
        alert ("Enter name of the menu item");
        return ;
    }
    if (qty.length <= 0)
    {
        alert ("Enter qty");
        return ;
    }
    if (price.length < 2)
    {
        alert ("Enter price of the menu item");
        return ;
    }
    // Get a reference to the database service
    var database = firebase.database();
    function writeUserData(name, qty, price) {
        var postData = {
            name:name,
            qty:qty,
            price:price
        };
        var updates={};
        updates['menu/' + itemKey] = postData;
        return database.ref().update(updates);
    }
    writeUserData(name,qty,price);
    var msg = document.getElementById("msg");
    msg.textContent = 'Menu item updated successfully! ';
    msg.style.display = "block";
    var menuForm = document.forms["myMenuForm"];
    menuForm.reset();
}

