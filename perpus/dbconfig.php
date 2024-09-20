<?php

$conn = mysqli_connect("localhost", "root", "", "testbuku");

$result = mysqli_query($conn,"SELECT * FROM buku");