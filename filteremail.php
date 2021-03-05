<?php

$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 0;
} else {
  echo 1;
}