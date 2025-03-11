<?php
if (isset($_POST['submit'])) {
    require "config.php";
    try {
        $connection = new PDO("mysql:host=$host", $username, $password, $options);

        $sql = file_get_contents("public/data/init.sql");
        $connection->exec($sql);
        echo "Database and table users created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

