<section class="top_slider">
  <div class="swiper main_slider">
    <div class="swiper-wrapper">

        <?foreach($slider as $slide):?>
        <div class="swiper-slide">
          <div class="main_slider-container" style="background-image: url(<?=$slide->img?>);">
            <div class="container main_slider-text">
                <div class="slider-container main_slider-row">
                  <h1 class="main_slider-title"><?=$slide->title?></h1>
                  <?if(!empty($slide->desc)):?>
                    <p class="main_slider-descr"><?=$slide->desc?></p>
                  <?endif?>
                  <ul class="main_slider-list">
                  <?foreach($services_slider as $service):?>
                      <?if($service->slider_id === $slide->id):?>
                        <li>
                            <img src="img/slider/lnr-checkmark-circle.svg">
                            <span><?=$service->text?></span>
                        </li>
                      <?endif?>
                  <?endforeach?> 
                  </ul>
                  <button class="btn btn-blue" type="submit">Позвонить</button>
                </div>
            </div>
          </div><!--/main_slider-container-->
        </div><!--/swiper-slide-->
        <?endforeach?>

    </div>
    <div class="swiper-pagination"></div>
    <div class="main_slider-btn">
      <div class="main_slider-prev">
        <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
      </div>  
      <div class="main_slider-next">
        <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
      </div> 
    </div>
</section>

<?if(!empty($advantage)):?>
<section class="advantage">
  <div class="container">
      <div class="swiper swiper-advantage">
          <div class="swiper-wrapper">
                <?foreach($advantage as $value):?>
                <div class="swiper-slide advantage-shadow">
                  <div class="advantage_item">
                    <div class="advantage_item-img">
                      <svg class="<?=$value->img?>"><use xlink:href="<?='#'.$value->img_use?>"></use></svg>
                    </div>
                    <div class="advantage_item-text"> 
                      <span class="advantage_item_title"><?=$value->title?></span>
                      <div class="advantage_item_line"></div>
                      <p class="advantage_item_desc"><?=$value->description?></p>
                    </div>
                  </div>
                </div><!--/advantage-block-->
                <?endforeach?>
          </div><!--/swiper-advantage-->
      </div><!--/advantage-row-->
  </div>
</section>
<?endif?>

<section class="section_catalog">
  <div class="container">
    <div class="wrapper catalog-main">
      
      <div class="catalog-main__row blue box-1"> 
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/med_oborudovanue.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Медицинское оборудование</h2>
            <ul class="catalog-main__text-list">
              <li><a href="#">Анeстезиология и реанимация</a></li>
              <li><a href="#">Реабилитация</a></li>
              <li><a href="#">Ультразвуковая диагностика</a></li>
              <li><a href="#">Стерилизация и дезинфекция</a></li>
              <li><a href="#">Реабилитация после COVID-2019</a></li>
              <li><a href="#">Функциональная диагностика</a></li>
            </ul>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->

      <div class="catalog-main__row qray box-3">
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/med.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Запасные части, принадлежности и аксессуары</h2>
            <ul class="catalog-main__text-list">
              <li><a href="#">Датчики О2 (кислородные)</a></li>
              <li><a href="#">Дыхательные контуры</a></li>
              <li><a href="#">Маски</a></li>
            </ul>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->

      <div class="catalog-main__row liteblue box-3">
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/monitor.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Ветеринарное оборудование </h2>
            <ul class="catalog-main__text-list">  
              <li><a href="#">Рентгенология</a></li>
              <li><a href="#">Ультразвуковая диагностика</a></li>
              <li><a href="#">Шприцевые дозаторы</a></li>
            </ul>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->
    
      <div class="catalog-main__row liteblue box-4">
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/reabilit.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Реабилитация</h2>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->

      <div class="catalog-main__row qray box-4">
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/uzi.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Датчики для УЗИ сканеров</h2>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->

      <div class="catalog-main__row blue box-4"> 
        <div class="catalog-main__inner">
          <picter class="catalog-main__inner-picter">
            <img class="" src="img/main/doz.png">
          </picter>
          <div class="catalog-main__text">
            <h2 class="catalog-main__text-title">Дыхательные контуры для ИВЛ и наркозных аппаратов </h2>
            <a href="#" class="more_link"><span>Все разделы</span></a>
          </div>
        </div>
      </div><!--/catalog-main__row-->
  
    </div><!--/wrapper-->
    <a href="#" class="more_link"><span>Весь каталог</span></a>
  </div>
</section>

<section class="main_product-slider">
      <!--tab-block-->

      <div class="container">
      <div class="tab-block main_product-block">
          <a class="tab-link active main_title-link" href="javascript:void(0);">Лучшее предложение</a>
          <a class="tab-link main_title-link" href="javascript:void(0);">Новинки</a>
          <a class="tab-link main_title-link" href="javascript:void(0);">Скидка</a>
      </div>
      <!--/tab-block-->

      <!--tab-content-->
      <div class="tab-content main_prod-tab-content">

        <!--Первый таб-->
        <?if(!empty($hits_product)):?>
          <?$curr = \ishop\App::$app->getProperty('currency');?>
        <div class="tab-body active product_tab-content-text">
            <div class="swiper main_prod"> 
              <div class="swiper-wrapper">

                <?foreach($hits_product as $elem):?>
                            
                <div class="swiper-slide">
                  <div class="products_container">
                      <div class="products_statuses">
                        <?if(!empty($elem->new)):?>
                          <span class="new products_status">NEW</span>
                        <?endif?>
                        <?if(!empty($elem->hit)):?>
                          <span class="hit products_status">HIT</span>
                        <?endif?>
                        <?if(!empty($elem->discount)):?>
                          <span class="discount products_status">%</span>
                        <?endif?>
                      </div>
                    
                    <div class="products_inner">
                        <?foreach($brand as $v):?>
                          <?if($elem->brand_id === $v->id):?>
                            <p class="products_producer"><?=$v->title;?></p>
                          <?endif?>
                        <?endforeach?>
            
                      <div class="products_img">
                        <img src="<?=$elem->img?>"></img>
                      </div>

                      <div class="products_text-title">
                        <a href="product/<?=$elem->alias?>"><?=$elem->title?></a>
                      </div>
                      <?if(empty($elem->prise)):?>
                        <div class="products_text-prise"><p>Цена по запросу</p></div>
                      <?else:?>
                      <div class="products_text-value">
                        <p>Средняя цена по рынку</p>
                        <span>
                          <?=$curr['symbol_left']?>
                          <?$prise = $elem->prise * $curr['value'];
                          echo number_format($prise, 1, ',', ' ')?> 
                          <?=$curr['symbol_rigth']?>
                        </span>
                      </div>
                      <?endif?>

                      <div class="products_btn-row">
                        <a href="cart/add?id=<?=$elem->id?>" class="products_btn get_kp">Получить КП</a>
                        <a href="cart/add?id=<?=$elem->id?>" data-id="<?=$elem->id?>" class="add-to-cart-link products_btn get_buy">
                          <svg class="products-cart lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
                          <span>Купить</span>
                        </a>
                      </div><!--/products_btn--> 

                    </div><!--/products_inner-->
                  </div><!--/products_container-->
                </div><!--/swiper-slide-->
                <?endforeach?>

              </div><!--/swiper-wrapper-->

              <div class="main_prod-btn">
                <div class="main_prod-prev">
                  <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
                </div>  
                <div class="main_prod-next">
                  <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
                </div> 
              </div>

            </div><!--/swiper-->
        </div><!--/tab-body-->
        <?endif?>
        <!--/Первый таб-->

        <!--/Второй таб-->
        <?if(!empty($new_product)):?>
          <?$curr = \ishop\App::$app->getProperty('currency');?>
        <div class="tab-body product_tab-content-text">

            <div class="swiper main_prod"> 
              <div class="swiper-wrapper">

                <?foreach($new_product as $elem):?>
                <div class="swiper-slide">
                  <div class="products_container">
                      <div class="products_statuses">
                        <?if(!empty($elem->new)):?>
                          <span class="new products_status">NEW</span>
                        <?endif?>
                        <?if(!empty($elem->hit)):?>
                          <span class="hit products_status">HIT</span>
                        <?endif?>
                        <?if(!empty($elem->discount)):?>
                          <span class="discount products_status">%</span>
                        <?endif?>
                      </div>
                    
                    <div class="products_inner">
                        <?foreach($brand as $v):?>
                          <?if($elem->brand_id === $v->id):?>
                            <p class="products_producer"><?=$v->title;?></p>
                          <?endif?>
                        <?endforeach?>
                      <div class="products_img">
                        <img src="<?=$elem->img?>"></img>
                      </div>

                      <div class="products_text-title">
                        <a href="product/<?=$elem->alias?>"><?=$elem->title?></a>
                      </div>
                      <?if(empty($elem->prise)):?>
                        <div class="products_text-prise"><p>Цена по запросу</p></div>
                      <?else:?>
                      <div class="products_text-value">
                        <p>Средняя цена по рынку</p>
                        <span>
                          <?=$curr['symbol_left']?>
                          <?$prise = $elem->prise * $curr['value'];
                          echo number_format($prise, 1, ',', ' ')?> 
                          <?=$curr['symbol_rigth']?>
                        </span>
                      </div>
                      <?endif?>

                      <div class="products_btn-row">
                        <a href="cart/add?id=<?=$elem->id?>" class="products_btn get_kp">Получить КП</a>
                        <a href="cart/add?id=<?=$elem->id?>" data-id="<?=$elem->id?>" class="add-to-cart-link products_btn get_buy">
                          <svg class="products-cart lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
                          <span>Купить</span>
                        </a>
                      </div><!--/products_btn--> 

                    </div><!--/products_inner-->
                  </div><!--/products_container-->
                </div><!--/swiper-slide-->
                <?endforeach?>

              </div><!--/swiper-wrapper-->

              <div class="main_prod-btn">
                <div class="main_prod-prev">
                  <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
                </div>  
                <div class="main_prod-next">
                  <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
                </div> 
              </div>

            </div><!--/swiper-->
            <!--/Новинки-->
        </div><!--/tab-body-->
        <?endif?>
        <!--/Второй таб-->
        

        <!--Третий таб-->
        <?if(!empty($discount_product)):?>
          <?$curr = \ishop\App::$app->getProperty('currency');?>
        <div class="tab-body product_tab-content-text">

            <div class="swiper main_prod"> 
              <div class="swiper-wrapper">

                <?foreach($discount_product as $elem):?>
                <div class="swiper-slide">
                  <div class="products_container">
                      <div class="products_statuses">
                        <?if(!empty($elem->new)):?>
                          <span class="new products_status">NEW</span>
                        <?endif?>
                        <?if(!empty($elem->hit)):?>
                          <span class="hit products_status">HIT</span>
                        <?endif?>
                        <?if(!empty($elem->discount)):?>
                          <span class="discount products_status">%</span>
                        <?endif?>
                      </div>
                    
                    <div class="products_inner">
                        <?foreach($brand as $v):?>
                          <?if($elem->brand_id === $v->id):?>
                            <p class="products_producer"><?=$v->title;?></p>
                          <?endif?>
                        <?endforeach?>
                      <div class="products_img">
                        <img src="<?=$elem->img?>"></img>
                      </div>

                      <div class="products_text-title">
                        <a href="product/<?=$elem->alias?>"><?=$elem->title?></a>
                      </div>
                      <?if(empty($elem->prise)):?>
                        <div class="products_text-prise"><p>Цена по запросу</p></div>
                      <?else:?>
                      <div class="products_text-value">
                        <p>Средняя цена по рынку</p>
                        <span>
                          <?=$curr['symbol_left']?>
                          <?$prise = $elem->prise * $curr['value'];
                          echo number_format($prise, 1, ',', ' ')?> 
                          <?=$curr['symbol_rigth']?>
                        </span>
                      </div>
                      <?endif?>

                      <div class="products_btn-row">
                        <a href="cart/add?id=<?=$elem->id?>" class="products_btn get_kp">Получить КП</a>
                        <a href="cart/add?id=<?=$elem->id?>" data-id="<?=$elem->id?>" class="add-to-cart-link products_btn get_buy">
                          <svg class="products-cart lnr-cart"><use xlink:href="#lnr-cart"></use></svg>
                          <span>Купить</span>
                        </a>
                      </div><!--/products_btn--> 

                    </div><!--/products_inner-->
                  </div><!--/products_container-->
                </div><!--/swiper-slide-->
                <?endforeach?>
                
              </div><!--/swiper-wrapper-->

              <div class="main_prod-btn">
                <div class="main_prod-prev">
                  <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
                </div>  
                <div class="main_prod-next">
                  <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
                </div> 
              </div>

            </div><!--/swiper-->
            <!--/Новинки-->
        </div><!--/tab-body-->
        <?endif?>
        <!--/Третий таб-->

      </div><!--/tab-content-->
      <!--/tab-content-->

    </div>
</section>

<section class="about_company indent">
  <div class="container">

    <h2 class="company_title">О компании</h2>
    <div class="swiper about_company-swip">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-slide_inner">
              <p>Компания "Medical-Trade" известна на рынке медицинской продукции уже более 7 лет. </p>
              <p>Мы специализируемся на поставках медицинского оборудования от ведущих производителей, запасных частей и принадлежностей к медицинскому оборудованию, 
                расходных материалов, а также стильной медицинской одежды.</p>
            </div>
          </div><!--/swiper-slide-->
          <div class="swiper-slide">
            <div class="swiper-slide_inner">
              <p>За период своей деятельности мы приобрели богатый опыт комплексного оснащения лечебных учреждений, а также, что особо ценно - уважение и доверие со стороны наших клиентов и деловых партнеров.</p>
              <p>Вся поставляемая продукция сертифицирована и отличается превосходным качеством и высоким уровнем безопасности.</p>
              <p>Мы являемся дистрибьюторской компанией, и предлагаем Вам актуальное медицинское оборудование по ценам от производителя. Большинство демо-аппаратов находится на нашем складе. Вы в любой момент можете заказать «живую» презентацию оборудования и испытать все уникальные возможности в Вашем учреждении.</p>
            </div>
          </div><!--/swiper-slide-->
        </div><!--/swiper-wrapper-->

        <div class="about_company-btn">
            <div class="about_company-button-prev">
              <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
            </div>  
            <div class="about_company-button-next">
              <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
            </div> 
        </div><!--about_company-btn-->

        <a href="#" class="more_link about_company-link"><span>Подробнее </span></a>
    </div>

  </div><!--container-->
</section>

<!--Nes-->
<section class="news_section">
  <div class="container">
    <h2 class="review_title">Новости</h2>

    <div class="news__container">
        <div class="news__block">
            <div class="news__block-row">
                <div class="news__block-img">
                  <img src="/img/about-bg-min.png">
                </div>
                <div class="news__block-text">
                    <h2 class="news__block-title"></h2>
                    <p class="news__block-data"></p>
                    <p class="news__block-desk"></p>
                    <a href="" class="more_link news__block-link"><span>Подробнее</span></a>
                </div>
            </div>
        </div>

        <div class="swiper slider-news">
            <div class="swiper-wrapper">
              <?foreach($news as $value):?>
              <div class="swiper-slide slider-news__container">
                      
                    <div class="slider-news__img">
                        <?if(!empty($value->img)):?>
                        <img src="<?=$value->img?>">
                        <?endif?> 
                    </div>
                    
                    <p class="slider-news__data"><?=$value->date?></p>
                    <p class="slider-news__title"><?=$value->title?></p>
                    <p class="slider-news__desk"><?=$value->preview?></p> 
                    <a href="<?=$value->alias?>" class="more_link slider-news__more_link"><span>Подробнее</span></a>
              </div>
              <?endforeach?>
            </div>

            <div class="slider-news-btn">
              <div class="slider-news__prev">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                <path fill="#000000" d="M14 20c0.128 0 0.256-0.049 0.354-0.146 0.195-0.195 0.195-0.512 0-0.707l-8.646-8.646 8.646-8.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-9 9c-0.195 0.195-0.195 0.512 0 0.707l9 9c0.098 0.098 0.226 0.146 0.354 0.146z"></path>
                </svg>
              </div>  
              <div class="slider-news__next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                <path fill="#000000" d="M5 20c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l8.646-8.646-8.646-8.646c-0.195-0.195-0.195-0.512 0-0.707s0.512-0.195 0.707 0l9 9c0.195 0.195 0.195 0.512 0 0.707l-9 9c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
                </svg>
              </div> 
            </div><!--/review_prod-btn-->
        </div>
    </div>


  </div>
</section>
<!--/Nes-->


<section class="news_section" style="display:none">
  <div class="container">
    <h2 class="review_title">Новости</h2>

      <div class="swiper news_swiper">
        <div class="swiper-wrapper">
            <?foreach($news as $value):?>
            <div class="swiper-slide">
              <div class="slide_news-inner">
                <div class="slide_news-row">
                  <p class="number_views"><?=$value->views?></p>
                  <p class="news_data"><?=$value->date?></p>
                </div>
                
                <h3 class="news_title"><?=$value->title?></h3>
                <div class="news_date-block">
                  <p class="news_date"><?=$value->preview?></p>
                </div>
                <a href="#" class="more_link news-link_inner"><span>Подробнее </span></a>
              </div>
            </div><!--/swiper-slide-->
            <?endforeach?>

        </div>
        <div class="news_prod-row">
          <div class="news_prod-btn">
            <div class="news-button-prev">
              <svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg>
            </div>  
            <div class="news-button-next">
              <svg class="lnr lnr-chevron-right"><use xlink:href="#lnr-chevron-right"></use></svg>
            </div> 
          </div>
          <a href="#" class="more_link news-link"><span>Все новости</span></a>
        </div><!--/review_prod-btn-->
      </div>

  </div><!--container-->
</section>

<section class="review_section">
  <div class="container">
    <h2 class="review_title">Отзывы</h2>

    <div class="swiper review-swip">
      <div class="swiper-wrapper">

          <?foreach($reviews as $review):?>
          <div class="swiper-slide">
            <div class="review-item">
                <h3 class="review_title_top"><?=$review->title?></h3>
                <div class="review_bottom">
                  <p class="review_bottom-job"><?=$review->town?></p>
                  <p class="review_bottom-job"><?=$review->position?></p>
                  <p class="review_bottom-date"><?=$review->when?></p>
                </div>
                <div class="review_desk"><p><?=$review->text?></p></div>
            </div><!--/review-item-->
          </div><!--/swiper-slide-->
          <?endforeach?>

      </div><!--/swiper-wrapper--> 
      
    <div class="review_prod-row">
      <div class="review_prod-btn">
        <div class="review_prod-prev">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M14 20c0.128 0 0.256-0.049 0.354-0.146 0.195-0.195 0.195-0.512 0-0.707l-8.646-8.646 8.646-8.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-9 9c-0.195 0.195-0.195 0.512 0 0.707l9 9c0.098 0.098 0.226 0.146 0.354 0.146z"></path>
          </svg>
        </div>  
        <div class="review_prod-next">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
            <path fill="#000000" d="M5 20c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l8.646-8.646-8.646-8.646c-0.195-0.195-0.195-0.512 0-0.707s0.512-0.195 0.707 0l9 9c0.195 0.195 0.195 0.512 0 0.707l-9 9c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
          </svg>
        </div> 
      </div><!--/review_prod-btn-->
      <a href="#" class="more_link review"><span>Все отзывы</span></a>
    </div>
    </div><!--swiper-->

  </div>
</section>


<section class="news_section">
  <div class="container">
    <h2 class="review_title">Блог</h2>

      <div class="swiper blog-swip">
        <div class="swiper-wrapper">
          <?foreach($blog as $value):?>
          <div class="swiper-slide blog-slide_container">
            <div class="blog-slide_img">
              <img src="<?=$value->img?>">
            </div><!--/swiper-slide_img-->
            <div class="blog-slide_text">
              <a href="blog/<?=$value->alias?>" class="blog-slide_title"><?=$value->title?></a>
              <div class="blog-slide_desk">
                 <p><?=$value->preview?></p>
              </div>
              <div class="blog-slide_btn">
                <a href="<?=$value->alias?>" class="more_link blog-slide_link">
                  <span>Подробнее</span>
                </a>
              </div>
            </div>
          </div><!--/swiper-slide-->
          <?endforeach?>
        </div><!--/swiper-wrapper-->

    <div class="blog_prod-row">
      <div class="blog_prod-btn">
        <div class="blog_prod-prev">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
          <path fill="#000000" d="M14 20c0.128 0 0.256-0.049 0.354-0.146 0.195-0.195 0.195-0.512 0-0.707l-8.646-8.646 8.646-8.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-9 9c-0.195 0.195-0.195 0.512 0 0.707l9 9c0.098 0.098 0.226 0.146 0.354 0.146z"></path>
          </svg>
        </div>  
        <div class="blog_prod-next">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
            <path fill="#000000" d="M5 20c-0.128 0-0.256-0.049-0.354-0.146-0.195-0.195-0.195-0.512 0-0.707l8.646-8.646-8.646-8.646c-0.195-0.195-0.195-0.512 0-0.707s0.512-0.195 0.707 0l9 9c0.195 0.195 0.195 0.512 0 0.707l-9 9c-0.098 0.098-0.226 0.146-0.354 0.146z"></path>
          </svg>
        </div> 
      </div><!--/review_prod-btn-->
      <a href="#" class="more_link blog"><span>Все статьи</span></a>
    </div>
      </div><!--/swiper-->

  </div>
</section>

<section class="feedback__form-section">
    <div class="container"> 
      <form method="POST" class="feedback__form">
      <h2 class="feedback__form-title">Остались вопросы ? Мы поможем вам с поиском</h2>
          <div class="feedback__form-row">
            <div class="feedback__form-block name">
              <lable class="feedback__form-lable">Ваше имя</lable>
              <input type="text" class="feedback__form-input" required placeholder="Имя*">
            </div><!--/feedback__form-block-->

            <div class="feedback__form-block phone">
              <lable class="feedback__form-lable">Ваш телефон</lable>
              <input type="text" class="feedback__form-input" required placeholder="Ваш телефон*">
            </div><!--/feedback__form-block-->

            <div class="feedback__form-block phone">
              <lable class="feedback__form-lable">Ваша почта</lable>
              <input type="text" class="feedback__form-input" required placeholder="Email*">
            </div><!--/feedback__form-block-->

            <div class="feedback__stock-check">
              <label class="feedback__label">
                  <input type="checkbox" class="feedback__label-detail" name="slide_1" value="">
                  <span class="feedback__label-btn"></span>
                  <span class="feedback__label-text">Нажимая на кнопку «Отправить», я соглашаюсь с 
                    <a href="/privacy-policy/" target="_blank">условиями политики конфиденциальности</a>.
                  </span>
              </label>
			      </div>

          </div>

          <button class="feedback__form-red btn">Отправить</button>
      </form>
    </div>
</section>