<?php

$conn = new mysqli("127.0.0.1", "root", "password", "contenido");


if ($conn->connect_errno) {
  die("error sql" . $conn->connect_errno);
}
