<?php
/**
 * Destroys the session to logout the user and redirect to Homepage
 * @author Hema,Swathi,Kavya,Mamdha
 */
session_start();
session_destroy();
header("Location: ./");    
?>