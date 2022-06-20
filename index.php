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
require_once __DIR__ . '/classes/AnimalFood.php';
require_once __DIR__ . '/classes/AnimalBed.php';

$user1 = new User ( 1 , 'Ugo' , 'De Ughi');
$user2 = new UserRegistered ( 2 , 'Mario' , 'Rossi', 'mario.rossi@gmail.com');
$user3 = new User ( 3 , 'Gianluca' , 'Bianchi');
$user4 = new UserRegistered ( 4 , 'Piero' , 'Sarti', 'piero.sarti@icloud.com');


$users_db = [$user1,$user2,$user3,$user4];

// var_dump($user1);
// var_dump($users_db);

$product1 = new Product ( 1 , 'Prodotto Generico' , 5 , '4 zampe' );
$product2 = new AnimalFood ( 150 , 'Natural Trainer Crocchette' , 35, 'Cane', 'Manzo & Riso');
$product3 = new Product ( 2 , 'Prodotto Generico 2' , 10, 'Volatili');
$product4 = new AnimalFood ( 151 , 'Hills Science Plan Feline' , 45, 'Gatto', 'Pollo');

$product5 = new AnimalBed ( 250 , 'Letto Cozy Velluto' , 20, 'Gatto', 'Interno');
$product6 = new AnimalBed ( 251 , 'Spike Comfort' , 105, 'Cane', 'Esterno');

$products_db = [$product1,$product2,$product3,$product5,$product4,$product6];

// var_dump($product1);
// var_dump($products_db);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./style/style.css">

  <title>php-oop-2</title>
</head>
<body>

  <div class="container my-2">
    <h2 class="text-center">Lista Utenti</h2>

    <div class="container users_container d-flex flex-wrap justify-content-center m-3">

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
          <li><strong>ID:</strong> <?php echo $user->getId()?></li>
          <li><strong>Nome:</strong>  <?php echo $user->getName()?></li>
          <li><strong>Cognome:</strong>  <?php echo $user->getSurname() ?></li>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li><strong>Email:</strong>  <?php echo $user->getEmail() ?></li>
          <?php endif; ?>
          <?php if(get_class($user) == 'UserRegistered') : ?>
          <li><strong>Sconto:</strong>  <?php echo $user->getDiscount() ?> &percnt;</li>
          <?php endif; ?>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>

    <h2 class="text-center">Lista Prodotti</h2>

    <div class="container products_container d-flex flex-wrap justify-content-center m-3">

      <?php foreach ($products_db as $item => $product): ?>

      <div class="product_box m-3">

        <?php if(get_class($product) == 'Product'){ ?>
          <h3><?php echo $product->getName()?></h3>
          <span>(Categoria: Generico)</span>
        <?php } else if(get_class($product) == 'AnimalFood') { ?>
          <h3><?php echo $product->getName()?></h3>
          <span>(Categoria: Cibo)</span>
          <?php } else if(get_class($product) == 'AnimalBed') { ?>
          <h3><?php echo $product->getName()?></h3>
          <span>(Categoria: Cuccia)</span>
        <?php } ?>

        <ul>
          <li><strong>ID:</strong> <?php echo $product->getId()?></li>
          <li><strong>Nome:</strong> <?php echo $product->getName()?></li>
          <li><strong>Prezzo:</strong> <?php echo $product->getPrice() ?> &euro;</li>
          <li><strong>Tipo di Animale:</strong> <?php echo $product->getAnimalType() ?></li>
          <?php if(get_class($product) == 'AnimalFood') : ?>
          <li><strong>Ingredienti: </strong><?php echo $product->getIngredients() ?></li>
          <?php endif; ?>
          <?php if(get_class($product) == 'AnimalBed') : ?>
          <li><strong>Tipologia:</strong> <?php echo $product->getTypeOfBed() ?></li>
          <?php endif; ?>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>


  </div>

</body>
</html>