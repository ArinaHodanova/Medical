<?
  db($_SESSION);
  // unset($_SESSION['cart.currency']);
  // unset($_SESSION['cart.qty']);
  // unset($_SESSION['cart.sum']);
  // unset($_SESSION['cart']);
?>

<div class="container">
    <!--crumbs-->
    <nav class="crumbs_wrap">
      <ul class="crumbs_wrap-block">
        <li class="crumbs_wrap-item">
          <a href="./" class="crumbs_wrap-list">
            <span>Главная</span>
          </a>
        </li>
        <?foreach($breadcrumbs as $link => $value):?>
          <?if($link != 'title'):?>
            <li class="crumbs_wrap-item">
              <a href="<?=$link?>" class="crumbs_wrap-list">
                <span><?=$value?></span>
              </a>
            </li>
          <?else:?>
            <li class="crumbs_wrap-item crumbs_wrap-active">
              <span><?=$value?></span>
            </li>
          <?endif?>
        <?endforeach?>
      </ul>
    </nav>
    <!--/crumbs-->
    <a href="" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>Вернуться к списку</a>
</div>

  <section>
    <div class="container">
    <div class="product_card">
    <div class="product_card-gallery">  

    <?if($gallery):?>
    <div class="swiper swiper-product_card2">
      <div class="swiper-wrapper">
          <?foreach($gallery as $img):?>
          <div class="swiper-slide slide_card2-wrap">
              <a data-fancybox="gallery_card2" href="<?=$img['img']?>">
                <img class="rounded" src="<?=$img['img']?>" />
              </a>
          </div>
          <?endforeach?>
      </div><!--/swiper-wrapper-->
        <div class="swiper-product__btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div><!--/swiper-button-->
    </div><!--/swiper-product_card2-->

    <div class="swiper swiper-product_card">
      <div class="swiper-wrapper swiper-wrapper-product_card">
          <?foreach($gallery as $img):?>
          <div class="swiper-slide">
            <img src="<?=$img['img']?>" />
          </div>
          <?endforeach?>
      </div>
    </div><!--/swiper-product_card-->
    <?elseif(!$gallery && !empty($product->img)):?>
      <div class="product_card-img">
          <a data-fancybox="gallery_card2" href="<?=$product->img?>">
            <img class="rounded" alt="<?=$product->title?>" src="<?=$product->img?>" />
          </a>
      </div>
    <?elseif(!$gallery && empty($product->img)):?>
      <div class="product_card-img">
        <img alt="Нет изображения" src="/img/product_card/noimage.png"/>
      </div>
    <?endif?>

    </div><!--/product_card-gallery-->
    <div class="product_card-text">
      <h1 class="product_card-title"><?=$product->title?></h1>
      <span class="product_card-maker">Производитель: <a href="#"><?=$brand->title;?></a></span>
      <?if(empty($product->prise)):?>
        <span class="product_card-prise" data-toggle="tooltip" data-title="Цена зависит от условий оплаты">Цена по запросу </span>
      <?else:?>
        <div class="product_card-value">
          <p>Средняя цена по рынку</p>
          <span>
            <?$curr = \ishop\App::$app->getProperty('currency');?>
            <?=$curr['symbol_left']?>
            <?$prise = $product->prise * $curr['value'];
               echo number_format($prise, 1, ',', ' ')?> 
            <?=$curr['symbol_rigth']?>
        </div>
      <?endif?>

      <div class="product_card-description">
      <p><?=$product->content;?></p>
    </div>
      <button href="#about-link" class="product_card-about"><span>Читать описание</span></button>

      <div class="product_card-quantity-row">
        <div class="product_card-quantity">
            <button class="js-plus-btn" type="button">+</button>
            <input id="number-diet" class="js-number" type="number" name="quantity" value="1" min="1">
            <button class="js-minus-btn" type="button">-</button>
        </div><!--/product_card-quantity-->
        <a id="productAdd" data-id="<?=$product->id?>" class="add-cart item_add add-to-cart-link" href="cart/add?id=<?=$product->id?>">В корзину</a>
      </div>

      <div class="product_card-buttons">
        <div class="product_card-buttons-grup">
          <a href="?id=<?=$product->id?>" class="product_card-btn prise" data-fancybox data-src="#modal-form_price" href="javascript:;">Узнать цену</a>
          <a href="?id=<?=$product->id?>" class="product_card-btn kp" data-fancybox data-src="#modal-form_kp" href="javascript:;">Получить КП</a>
        </div>
      </div><!--product_short_buttons-->
    </div><!--product_card-text-->

    <div class="product_accordion">
      <?//=db($advantage)?>
      <?foreach($advantage as $elem):?>
      <div class="product_accordion_block">
        <button class="product_accordion-title">
          <h4><?=$elem->title?></h4>
        </button>
        <div class="product_accordion-content">
          <div class="product_accordion-content-text"><?=$elem->description?></div>
        </div>
      </div>
      <?endforeach?>
    </div><!--/product_accordion-->
    </div>
    </div>
  </section><!--/product_card-->


  <div id="about-link"></div>

<section class="product_tab">
  <div class="container">

  <div class="product_tab-block">
      <?foreach($tabsproduct as $k => $v):?>
        <a class="product_tab-link tab-link product_tab-text <?= ($k == 0)? 'active': false ?> "><?=$v['name']?></a>
      <?endforeach?>
  </div>



  <?if($tabsproduct):?>
  <div class="product_tab-content">
    <?foreach($tabsproduct as $k => $v):?>
        
        <div class="product_tab-body tab-body product_tab-content-text <?= ($k == 0)? 'active': false ?>">
            <?if(!empty($v['content'])):?>
              <?=$v['content']?>
            <?endif?>
            <?if(!empty($v['documen'])):?>
              <ul class="product_tab-content-doc">
                <?foreach($v['documen'] as $k_doc => $v_doc):?>
                  <li>
                    <span class="product_tab-content-title"><?=$v_doc['type']?></span>:
                    <a href="<?=$v_doc['link']?>" target="blanck" class="product_tab-content-link"><?=$v_doc['link']?></a>
                  </li>
                <?endforeach?>
              </ul>
            <?endif?>

            <?if(!empty($v['reviews'])):?>
              <ul class="product_tab-content-review">
                <?foreach($v['reviews'] as $k_review => $v_review):?>
                    <li>
                      <div class="product_rating-block">
                        <span class="product_rating-data"><?=$v_review['data']?></span>
                        <span>
                            <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg" style="display: none">
                              <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                              </symbol>
                            </svg>

                            <p class="c-rate">
                              <?for($i = 1; $i <= $v_review['rating_max']; $i++):?>
                                <svg class="c-icon <?=($i <= $v_review['rating'])? 'active': false?> " width="18" height="18">
                                    <use xlink:href="#star"></use>
                                </svg>
                              <?endfor?>
                            </p>
                        </span>
                      </div>
                      <p><?=$v_review['job_title']?></p>
                      <p><?=$v_review['name_compani']?></p>
                      <p><?=$v_review['text']?></p>
                    </li>
                <?endforeach?>
              </ul>
            <?endif?>
        </div>

    <?endforeach?>
  </div>
  <?endif?>


  </div> <!--/container-->
</section><!--/product_tab-->

<?if($related):?>
<section class="related-prod__section">
  <div class="container">
    <h2>С этими товарами покупают:</h2>

      <div class="swiper related-prod__slider">
          <div class="swiper-wrapper">

              <?foreach($related as $k => $v):?>
              <?$curr = \ishop\App::$app->getProperty('currency');?>
              <div class="swiper-slide">
                  <div class="related-prod_row">

                      <div class="products_statuses">
                        <?if(!empty($v['new'])):?>
                          <span class="new products_status">NEW</span>
                        <?endif?>
                        <?if(!empty($v['hit'])):?>
                          <span class="hit products_status">HIT</span>
                        <?endif?>
                        <?if(!empty($v['discount'])):?>
                          <span class="discount products_status">%</span>
                        <?endif?>
                      </div>

                      <div class="related-prod__inner">
                          <?foreach($brand_rel as $value):?>
                            <?if($v['brand_id'] === $value['id']):?>
                              <p class="related-prod__producer"><?=$value['title'];?></p>
                            <?endif?>
                          <?endforeach?>                          

                          <div class="related-prod__img">
                            <?if(!empty($v['img'])):?>
                              <img alt="<?=$v['alias']?>" src="<?=$v['img']?>">
                            <?else:?>
                              <img alt="Нет изображения" src="/img/product_card/noimage.png">
                            <?endif?>
                          </div>

                          <?foreach($categories as $category):?>
                            <?if($v['category_id'] === $category['id']):?>
                              <a href="category/<?=$category['alias']?>" class="related-prod__category"><?=$category['title']?></a>
                            <?endif?>
                          <?endforeach?>

                          <div class="related-prod__title">
                              <a href="product/<?=$v['alias']?>"><?=$v['title']?></a>
                          </div>

                          <?if(empty($v['prise'])):?>
                            <div class="related-prod__prise"><p>Цена по запросу</p></div>
                          <?else:?>
                            <div class="related-prod__value">
                                <p>Средняя цена по рынку</p>
                                <span>
                                  <?=$curr['symbol_left']?>
                                  <?$prise = $v['prise'] * $curr['value'];
                                      echo number_format($prise, 1, ',', ' ')?> 
                                  <?=$curr['symbol_rigth']?>
                                </span>
                            </div>
                          <?endif?>

                          <div class="products_btn-row">
                            <a href="cart/add?id=<?=$v['id']?>" data-id="<?=$v['id']?>" class="add-to-cart-link related-prod__btn get_kp">Получить КП</a>
                            <a href="cart/add?id=<?=$v['id']?>" data-id="<?=$v['id']?>" class="add-to-cart-link related-prod__btn get_buy">
                              <svg class="products-cart lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
                              <span>Купить</span>
                            </a>
                          </div>

                      </div><!--/related-prod__inner-->

                  </div><!--/products_container-->
              </div><!--/swiper-slide-->
              <?endforeach?>
          </div>

              <div class="related-prod__btn">
                <div class="related-prod__btn-prev">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path fill="#000000" d="M14 20c0.128 0 0.256-0.049 0.354-0.146 0.195-0.195 0.195-0.512 0-0.707l-8.646-8.646 8.646-8.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-9 9c-0.195 0.195-0.195 0.512 0 0.707l9 9c0.098 0.098 0.226 0.146 0.354 0.146z"></path></svg>
                </div>  
                <div class="related-prod__btn-next">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path fill="#000000" d="M5 20c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l8.646-8.646-8.646-8.646c-0.195-0.195-0.195-0.512 0-0.707s0.512-0.195 0.707 0l9 9c0.195 0.195 0.195 0.512 0 0.707l-9 9c-0.098 0.098-0.226 0.146-0.354 0.146z"></path></svg>
                </div>
              </div><!--/review_prod-btn-->

      </div><!--/swiper-->

  </div>
</section>
<?endif;?>


<?if($recently_viewed):?>
<section class="related-prod__section">
  <div class="container">
    <h2>Просмотренные товары:</h2>

      <div class="swiper related-prod__slider">
          <div class="swiper-wrapper">

              <?foreach($recently_viewed as $k => $v):?>
              <?$curr = \ishop\App::$app->getProperty('currency');?>
              <div class="swiper-slide">
                  <div class="related-prod_row">

                      <div class="products_statuses">
                        <?if(!empty($v['new'])):?>
                          <span class="new products_status">NEW</span>
                        <?endif?>
                        <?if(!empty($v['hit'])):?>
                          <span class="hit products_status">HIT</span>
                        <?endif?>
                        <?if(!empty($v['discount'])):?>
                          <span class="discount products_status">%</span>
                        <?endif?>
                      </div>

                      <div class="related-prod__inner">
                          <?foreach($brand_rel as $value):?>
                            <?if($v['brand_id'] === $value['id']):?>
                              <p class="related-prod__producer"><?=$value['title'];?></p>
                            <?endif?>
                          <?endforeach?>                          

                          <div class="related-prod__img">
                            <?if(!empty($v['img'])):?>
                              <img alt="<?=$v['alias']?>" src="<?=$v['img']?>">
                            <?else:?>
                              <img alt="Нет изображения" src="/img/product_card/noimage.png">
                            <?endif?>
                          </div>

                          <?foreach($categories as $category):?>
                            <?if($v['category_id'] === $category['id']):?>
                              <a href="category/<?=$category['alias']?>" class="related-prod__category"><?=$category['title']?></a>
                            <?endif?>
                          <?endforeach?>

                          <div class="related-prod__title">
                              <a href="product/<?=$v['alias']?>"><?=$v['title']?></a>
                          </div>

                          <?if(empty($v['prise'])):?>
                            <div class="related-prod__prise"><p>Цена по запросу</p></div>
                          <?else:?>
                            <div class="related-prod__value">
                                <p>Средняя цена по рынку</p>
                                <span>
                                  <?=$curr['symbol_left']?>
                                  <?$prise = $v['prise'] * $curr['value'];
                                      echo number_format($prise, 1, ',', ' ')?> 
                                  <?=$curr['symbol_rigth']?>
                                </span>
                            </div>
                          <?endif?>

                          <div class="products_btn-row">
                            <a href="cart/add?id=<?=$v['id']?>" data-id="<?=$v['id']?>" class="add-to-cart-link related-prod__btn get_kp">Получить КП</a>
                            <a href="cart/add?id=<?=$v['id']?>" data-id="<?=$v['id']?>" class="add-to-cart-link related-prod__btn get_buy">
                              <svg class="products-cart lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
                              <span>Купить</span>
                            </a>
                          </div>

                      </div><!--/related-prod__inner-->

                  </div><!--/products_container-->
              </div><!--/swiper-slide-->
              <?endforeach?>
          </div>

              <div class="related-prod__btn">
                <div class="related-prod__btn-prev">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path fill="#000000" d="M14 20c0.128 0 0.256-0.049 0.354-0.146 0.195-0.195 0.195-0.512 0-0.707l-8.646-8.646 8.646-8.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-9 9c-0.195 0.195-0.195 0.512 0 0.707l9 9c0.098 0.098 0.226 0.146 0.354 0.146z"></path></svg>
                </div>  
                <div class="related-prod__btn-next">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path fill="#000000" d="M5 20c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l8.646-8.646-8.646-8.646c-0.195-0.195-0.195-0.512 0-0.707s0.512-0.195 0.707 0l9 9c0.195 0.195 0.195 0.512 0 0.707l-9 9c-0.098 0.098-0.226 0.146-0.354 0.146z"></path></svg>
                </div>
              </div><!--/review_prod-btn-->

      </div><!--/swiper-->

  </div>
</section>
<?endif;?>