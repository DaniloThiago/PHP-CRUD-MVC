<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site</title>
  <link rel="stylesheet" href="<?php echo URL_BASE."assets/fonts/fontawesome/css/all.css"?>">
  <link rel="stylesheet" href="<?php echo URL_BASE."assets/css/style.css"?>">
</head>
<body>
  <div class="container">
    <div class="base-center">
      <div class="base-top">
        <a class="logo" href="index.html">
          <i class="fas fa-dungeon"></i>
        </a>
        <form class="search" action="">
          <input type="text" placeholder="Pesquisar">
          <input type="submit" value="">
        </form>
      </div>

      <nav>
        <ul>
          <li><a href="<?= URL_BASE?>">Home</a></li>
          <li><a href="<?= URL_BASE,"contato/create"?>">Cadastrar contato</a></li>
          <li><a href="<?= URL_BASE,"contato/"?>">Lista de contatos</a></li>
        </ul>
      </nav>