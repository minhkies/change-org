<?php

//Connect to mysql
$connection = new mysqli('localhost', 'root', '');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS change_org";
if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}

// Connect to database

$connection = new mysqli('localhost', 'root', '', 'change_org');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
password TEXT NOT NULL,
first_name VARCHAR(50) NOT NULL ,
last_name VARCHAR(50) NOT NULL 
)";

if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS posts (
pid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid VARCHAR(100),
title TEXT,
goal FLOAT,
current_amount FLOAT DEFAULT 0,
problem LONGTEXT,
img TEXT,
base VARCHAR(50),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
recipient TEXT
)";

if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}
$pw = password_hash('admin', PASSWORD_DEFAULT);

$sql="INSERT IGNORE INTO users (username, password, first_name, last_name)
VALUES ('admin','$pw', 'Anonymous', 'Admin')";

if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}