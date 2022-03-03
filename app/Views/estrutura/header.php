<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?= base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $titulo; ?></title>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col">
    <div class="col-12">
        <img src="<?php echo base_url("public/images/urgtec-logo.png"); ?>" alt="">
    </div>
    <div class="mb-6">
        <h1><?php echo $titulo; ?> Urgtec</h1>
        <div class-"mb-12">
            <h3 class="text-center"><strong class=" text-success"><?php echo $msg; ?></strong></h3>
        </div>