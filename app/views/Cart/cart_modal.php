<?if(!empty($_SESSION['cart'])):?>
  <?
    // echo '<pre>';
    // print_r($_SESSION['cart']);
    // echo '</pre>';
  ?>
  <?foreach($_SESSION['cart'] as $k => $v):?>
    <a href="<?=$v['alias']?>" class="cart__body-row">
        <div class="cart__body-img">
            <img src="<?=$v['img']?>">
        </div>
        <div class="cart__body-text">
            <h2 class="cart__body-title"><?=$v['title']?></h2>
            <p><span>Цена: <span> <?=$v['prise']?></p>
            <p><span>Колличество: <span> <?=$v['qty']?></p>
        </div>
    </a>
  <?endforeach?>
<?else:?>
  <h2>Корзина пуста</h2>
<?endif?>