<div class="overlay" style="display: none"></div>
<?
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

// unset($_SESSION['cart']);
// unset($_SESSION['cart.qty']);
// unset($_SESSION['cart.sum']);

?>

<!--Корзина-->
<div class="cart__fade" id="cart">
	<div class="popup">
		<a class="popup-close" href="#">Закрыть</a>

	<h2 class="cart__title">Корзина</h2>
  <div class="cart__body">

  </div>
  <div class="cart__footer">
      <button class="cart__btn-continue">Продолить покупки</button>
      <a href="" class="cart__btn-design"> Оформить заказ</a>
      <button class="cart__btn-clear">Очистить козину</button>
  </div>
	</div>		
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
      <div class="burger-menu">

          <div class="burger-menu__name">
              <div class="burger-menu__btn">
		              <span></span>
		              <span></span>
		              <span></span>
              </div>
              <p class="burger-menu__title">Каталог</p>
	        </div>

          <div class="burger-menu__drop">
              <div class="burger-menu__drop-row">
                  <!--первая колонка-->
                  <div class="burger-menu__col1">
                      <ul class="burger-menu__col1-list">
                      <?foreach($categories as $category):?>
                        <?if($category['parent_id'] === '0'):?>
                          <li class="burger-menu__col1-item">
                                <?if(!empty($category['img'])):?>
                                <div class="burger-menu__col1-image">
                                  <img src="<?=$category['img']?>" class="img-svg">
                                </div>
                                <?endif?>
                                <p><?=$category['title'];?></p>
                                <div class="burger-menu__col1-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="kd"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg></div>
                          </li>
                        <?endif?>
                      <?endforeach?>
                      </ul>
                      <a>Телефон: 8 (888) 888-88-88 </a>
                  </div>
                  <!--/первая колонка-->
                  <!--вторая колонка-->
                  <div class="burger-menu__col2">
                    <div class="burger-menu__col2-inner">
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Мед. оборудование</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Мед. оборудование 1 товар</a></li>
                          <li><a href="">Мед. оборудование 2 товар</a></li>
                          <li><a href="">Мед. оборудование 3 товар</a></li>
                          <li><a href="">Мед. оборудование 2 товар</a></li>
                          <li><a href="">Мед. оборудование 3 товар</a></li>
                        </ul>
                      </div>
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Мед. оборудование Первый товар</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Мед. оборудование 1 товар</a></li>
                        </ul>
                      </div>
                    </div><!--/burger-menu__col2-inner-->

                    <div class="burger-menu__col2-inner">
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Запчасти и расходники</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Запчасти и расходники 1 товар</a></li>
                          <li><a href="">Запчасти и расходники 2 товар</a></li>
                          <li><a href="">Запчасти и расходники 3 товар</a></li>
                          <li><a href="">Запчасти и расходники 2 товар</a></li>
                          <li><a href="">Запчасти и расходники 3 товар</a></li>
                        </ul>
                      </div>
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Запчасти и расходники Первый товар</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Запчасти и расходники 1 товар</a></li>
                        </ul>
                      </div>
                    </div><!--/burger-menu__col2-inner-->

                    <div class="burger-menu__col2-inner">
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Медицинская мебель</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Медицинская мебель 1 товар</a></li>
                          <li><a href="">Медицинская мебель 2 товар</a></li>
                          <li><a href="">Медицинская мебель 3 товар</a></li>
                          <li><a href="">Медицинская мебель 2 товар</a></li>
                          <li><a href="">Медицинская мебель 3 товар</a></li>
                        </ul>
                      </div>
                      <div class="burger-menu__col2-blok">
                        <p class="burger-menu__col2-title">Медицинская мебель Первый товар</p>
                        <ul class="burger-menu__col2-list">
                          <li><a href="">Медицинская мебель 1 товар</a></li>
                        </ul>
                      </div>
                    </div><!--/burger-menu__col2-inner-->

                  </div><!--/burger-menu__col2-->
                  <!--/вторая колонка-->
              </div>
          </div>

      </div>
      <!-- <div class="header-menu_catalog">
        <button class="menu_catalog_link" href="#">Каталог</button>

        <div class="header-menu_body-drop">
          <div class="header-menu_drop-row">
            <p>dfdfg</p>
          </div>
        </div>

      </div> -->

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