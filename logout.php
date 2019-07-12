<?php
/**
 * Created by PhpStorm.
 * User: VIN
 * Date: 2/24/2017
 * Time: 10:20 PM
 */

session_start();
unset ($_SESSION['session_user']);
session_destroy();
header("location: index.php");