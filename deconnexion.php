<?php
require "./model/config/util.php";

session_start();
delete_session();

header("Location: index.php");
