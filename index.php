<?php

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).


require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserRegistered.php';

require_once __DIR__ . '/classes/Product.php';

$user1 = new User ( 1 , 'Ugo' , 'De Ughi');
$user2 = new UserRegistered ( 2 , 'Mario' , 'Rossi', 'mario.rossi@gmail.com');

$users_db = [$user1,$user2];

// var_dump($user1);
// var_dump($users_db);

$product1 = new Product ( 1 , 'Prodotto Generico' , 5);

$products_db = [$product1];

var_dump($product1);
var_dump($products_db);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <title>php-oop-2</title>
</head>
<body>

  <div class="container my-2">
    <h2>Lista Utenti:</h2>

    <div class="container users_container d-flex flex-column m-3">

      <?php foreach ($users_db as $people => $user): ?>

      <div class="user_box m-3">

        <?php if(get_class($user) == 'UserRegistered'){ ?>
          <h3><?php echo $user->getFullName()?></h3>
          <span>(Utente Registrato)</span>
        <?php } else if(get_class($user) == 'User') { ?>
          <h3><?php echo $user->getFullName()?></h3>
          <span>(Utente Guest)</span>
        <?php } ?>

        <ul>
          <li>ID: <?php echo $user->getId()?></li>
          <li>Nome: <?php echo $user->getName()?></li>
          <li>Cognome: <?php echo $user->getSurname() ?></li>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li>Email: <?php echo $user->getEmail() ?></li>
          <?php endif; ?>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li>Sconto: <?php echo $user->getDiscount() ?></li>
          <?php endif; ?>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>

    <h2>Lista Prodotti:</h2>

    <div class="container products_container d-flex m-3">

      <?php foreach ($products_db as $item => $product): ?>

      <div class="product_box m-3">

        <?php if(get_class($product) == 'Product'){ ?>
          <h3><?php echo $user->getName()?></h3>
          <span>(Categoria: Generico)</span>
        <?php } else if(get_class($product) == 'AnimalFood') { ?>
          <h3><?php echo $user->getFullName()?></h3>
          <span>(Utente Guest)</span>
        <?php } ?>

        <ul>
          <li>ID: <?php echo $product->getId()?></li>
          <li>Nome: <?php echo $product->getName()?></li>
          <li>Prezzo: <?php echo $product->getPrice() ?> &euro;</li>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li>Email: <?php echo $user->getEmail() ?></li>
          <?php endif; ?>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li>Sconto: <?php echo $user->getDiscount() ?></li>
          <?php endif; ?>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>


  </div>

</body>
</html>