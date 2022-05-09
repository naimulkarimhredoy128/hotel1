<?php
/**
 * Created by Us.
 * User: Naimul
 * Date: 12-11-2021
 * Time: 03:07 PM
 */

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
session_abort();
header('Location:login.php');