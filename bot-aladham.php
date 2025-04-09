<?php
$verify_token = "aladham-bot"; // لازم يكون مطابق تمامًا للتوكين اللي في فيسبوك

if ($_GET['hub_verify_token'] === $verify_token) {
    echo $_GET['hub_challenge'];
} else {
    echo 'Invalid Verify Token';
}
