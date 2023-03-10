<div class="overlay" style="display: none"></div>
<?
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

// unset($_SESSION['cart']);
// unset($_SESSION['cart.qty']);
// unset($_SESSION['cart.sum']);

?>
<!--Корзина-->
<div style="display: none; width: 500px;" id="cart" class="cart__fade">
	<h2 class="cart__title">Корзина</h2>
  <div class="cart__body">

  </div>
  <button class="cart__btn-continue">Продолить покупки</button>
  <a href="" class="cart__btn-design"> Оформить заказ</a>
  <button class="cart__btn-clear">Очистить козину</button>
</div>
<!--/Корзина-->

<header class="header">
      <div class="header-top">
        <div class="container header-top__row">
          <ul class="header-top_menu">
              <li class="header-top_item">
                <a href="">О компании</a>
              </li>
              <li class="header-top_item">
                <a href="">Новости</a>
              </li>
              <li class="header-top_item">
                <a href="">Статьи</a>
              </li>
              <li class="header-top_item">
                <a href="">Отзывы</a>
              </li>
          </ul>

          <div class="header__top-adress dropdown-block-curr">
              <?new app\widgets\currency\Currency();?>
          </div>

        </div><!--container-->
      </div><!--header-top-->
    
    
    <div class="container">
    
      <div class="header-body">
        <a href="/" class="header-logo"><img src="img/logo.svg" alt="" class="header-body_logo"></a>
    
        <form action="" method="get" class="header-body_search">
          <svg class="ickon-search lnr"><use xlink:href="#lnr-magnifier"></use></svg>
          <input name="s" placeholder="Поиск товара" type="search" class="header-body_search-field">
          <button type="submit" class="header-body_search-button">Найти</button>
        </form>

        <div class="header-body_post">
          <div class="header-body_img">
            <img src="img/icon-mail.svg" alt="Наша почта" class="header-body_icons">
          </div>
          <div class="header-body_work">
            <a href="" class="header-body_mail">test@mail.ru</a>
            <span class="header-body_chart" >Пн-Пт с 9.00 до 18.00</span>
          </div>
        </div><!--/header-body_post-->
    
        <div class="header-body_phone">
          <div class="header-body_img">
            <img src="img/icon-phone.svg" alt="Наша почта" class="header-body_icons">
          </div>
          <div class="header-body_work">
            <a href="#" class="header-body_number">8 (888) 888-88-88 </a>
            <a href="#" class="header-body_order" data-fancybox data-src="#modal-form_orderacall" href="javascript:;">Заказать звонок</a>
          </div>
        </div><!--/header-body_phone-->

        <div class="icon-basket">
          <span class="basket-amount">10</span>
          <svg class="lnr lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
          <div>
            <span class="lnr-cart-text">Корзина</span>
            <span></span>
          </div>
				</div><!--/icon-basket-->
      </div><!--/header-body-->

    <div class="menu_block">
      <div class="header-menu_catalog">
        <button class="menu_catalog_link" href="#">Каталог</button>
        <!--выпадающее меню-->
        <div class="header-menu_body-drop">
          <div class="header-menu_drop-row">
            <p>dfdfg</p>
          </div>
        </div>
        <!--!выпадающее меню-->
      </div>

      <!--new menu-->
      
      <nav class="header-menu">
          <?new app\widgets\menu\Menu([
            'tpl' => WWW . '/menu/top_menu.php',
            'table' => 'category',
            'container' => 'ul',
            'class' => 'header-menu_list',
            /*'attrs' => [
              'style' => 'color:red'
            ]*/
          ]);?>
      </nav>
      <!--/new menu-->
    </div><!--/menu_catalog-->

</div>
    </div><!--container-->
</header>