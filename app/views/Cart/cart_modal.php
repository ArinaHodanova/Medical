<?if(!empty($_SESSION['cart'])):?>
  <?
    echo '<pre>';
    print_r($_SESSION['cart']);
    echo '</pre>';
  ?>
<?else:?>
  <h2>Корзина пуста</h2>
<?endif?>