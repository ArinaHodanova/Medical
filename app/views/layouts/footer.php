<footer class="footer">
    <div class="container">
      <div class="footer_row">
        <div  class="footer_row-logo">
          <a href="/"><img src="img/logo.svg" alt="" class="footer-body_logo"></a>
          <p class="rights_reserved">Medical-Trade © 2022 <span>Все права защищены.</span></p>
        </div>
        <ul class="footer_row-list">
          <li><a href="#">Новости</a></li>
          <li><a href="#">Блог</a></li>
          <li><a href="#">Отзывы</a></li>
          <li><a href="#">Доставка</a></li>
          <li><a href="#">Вакансии</a></li>
          
        </ul>
        <ul class="footer_row-list">
          <li><a href="#">О компании</a></li>
          <li><a href="#">Каталог</a></li>
          <li><a href="#">Производители</a></li>
          <li><a href="#">Политика конфиденциальности</a></li>
          <li><a href="#">Пользовательское соглашение</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
        <div class="footer_row-contact">
            <div class="footer_contact-inner">
                <span class="lnr lnr-phone-handset"></span>
                <p class="footer_tel">8 (888) 888-88-88</p>
            </div>
            <div class="footer_contact-inner">
                <span class="lnr lnr-envelope"></span>
                <a href="" class="footer_mail">test@mail 
                  <span>Пн-Пт с 9.00 до 18.00</span>
                </a>
            </div>
            <div class="footer_contact-inner">
                <span class="lnr lnr-map-marker"></span>
                <p class="footer_adress">Город
                  <span>ул. Улица дом № 10</span>
                </p>
            </div>
        </div>
      </div><!--/footer_row-->
      <div class="footer_stock">
        <div class="footer_stock-text">
          <p class="footer_stock-desk">Подпишитесь на рассылку и будьте в курсе всех скидок и акций!</p>
        </div>
        <form class="footer_stock-form">
          <div class="footer_stock-input">				    	
            <input class="stock-input" id="emil" type="email" name="form">                				    	
            <label for="emil">Ваш e-mail<label>    				    	                        				    	
          </div>
          <button type="submit" class="footer_stock-btn btn btn-blue"><span>Подписаться</span></button>

          <div class="footer_stock-check">			   
            <label class="footer_stock_block-label">
              <input type="checkbox" class="checkbox-detail" name="slide_1" value="">
              <span class="checkbox-btn"></span>
              <span class="checkbox-text">Нажимая на кнопку «Отправить», я соглашаюсь с <a href="/privacy-policy/" target="_blank">условиями политики конфиденциальности</a>.</span>
            </label>
			    </div>
        </form><!--/footer_stock-form-->
      </div>
      <p class="footer_bottom">ООО «Медикал Трейд» 100000, г. Город, Щёлковское шоссе, ОГРН 1027700268298</p>
    </div>
    <?
// $logs = \R::getDatabaseAdapter()
//     ->getDatabase()
//     ->getLogger();
// db($logs->grep('SELECT'));
?>
</footer>