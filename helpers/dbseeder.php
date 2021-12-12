<?php
include '../dbconnect.php';
include '../random.php';

/**
 * Seed data for brand table
 */

//table: brand
    // $stmt = $pdo->prepare('INSERT INTO brands (`name`, `desc`) values (:name, :desc)');
    // $name= "SamSung";
    // $desc = "SamSung Factory";
    // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    // $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
    // $stmt->execute();

//table: customer
    // $stmt = $pdo->prepare('INSERT INTO customers  ( `fullname`, `email`, `pass`, `adress`, `phone`) VALUES (:fullname, :email, :pass, :adress, :phone)');       
    // $fullname='Nguyễn Thảo';
    // $email='thao@gmail.com';
    // $pass='thao';
    // $adress='Hà Nội';
    // $phone='0774658673';
    // $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    // $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    // $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
    // $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);           
    // $stmt->execute();

//table: users
    // $stmt = $pdo->prepare('INSERT INTO users  ( `id`, `username`, `pass`, `role`) VALUES (:id,:username, :pass, :role)');
    // $id='1';   
    // $username='Nguyễn Trung';
    // $pass='trung@gmail.com';
    // $role='Nam';
    // $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    // $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    // $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    // $stmt->bindParam(':role', $role, PDO::PARAM_STR);          
    // $stmt->execute();

//table: categories
    // $stmt = $pdo->prepare('INSERT INTO categories (`name`) values (:name)');
    // $name= "Tables";
    // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    // $stmt->execute();

//table: orders
    // $stmt = $pdo->prepare('INSERT INTO orders (`name`, `desc`, `created_at`, `status`, `customer_id`) values (:name, :desc, :created_at, :status, :customer_id)');
    // $name= "Modern Chair";
    // $desc = "Modern Chair Factory";
    // $created_at="02/02/2021";
    // $status="1";
    // $customer_id="1";
    // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    // $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
    // $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
    // $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    // $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR);
    // $stmt->execute();

//table: products
    // $stmt = $pdo->prepare('INSERT INTO products (`name`, `price`, `view`, `discount`, `brand_id`, `category_id`) values (:name, :price, :view, :discount, :brand_id, :category_id)');
    // $name= "Modern Chair";
    // $price = "120";
    // $view="222";
    // $discount="1";
    // $brand_id="1";
    // $category_id="1";
    // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    // $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    // $stmt->bindParam(':view', $view, PDO::PARAM_STR);
    // $stmt->bindParam(':discount', $discount, PDO::PARAM_STR);
    // $stmt->bindParam(':brand_id', $brand_id, PDO::PARAM_STR);
    // $stmt->bindParam(':category_id', $category_id, PDO::PARAM_STR);
    // $stmt->execute();

//table: order_details
    // $stmt = $pdo->prepare('INSERT INTO order_details (`product_id`, `quatity`, `order_id`) values (:product_id, :quatity, :order_id)');
    // $product_id= "1";
    // $quatity = "43";
    // $order_id="1";
    // $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
    // $stmt->bindParam(':quatity', $quatity, PDO::PARAM_STR);
    // $stmt->bindParam(':order_id', $order_id, PDO::PARAM_STR);
    // $stmt->execute();

//table: medical
    // $stmt = $pdo->prepare('INSERT INTO medical (`name`, `desc`, `priority`, `product_id`) values (:name, :desc, :priority, :product_id)');
    // $name= "aaa";
    // $desc = "Night Stand";
    // $priority="2";
    // $product_id="1";
    // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    // $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
    // $stmt->bindParam(':priority', $priority, PDO::PARAM_STR);
    // $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
    // $stmt->execute();
?>