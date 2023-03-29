const overlay = document.querySelector('.overlay');

//Табы
tabs("tab-link", "tab-body");
setJsVoid(document.querySelectorAll(".tab-link"));

function tabs(btnClass, blockClass) {
  var link = document.querySelectorAll("." + btnClass);
  var tabs = document.querySelectorAll("." + blockClass);

  for (var i = 0; i < link.length; i++) {
    setClick(i);
  }

  function setClick(i) {
    link[i].addEventListener('click', function() {
      removeClass(link, 'active');
      removeClass(tabs, 'active');
      // При клике - убрать активный класс со всех кнопок и блоков,
      
      addClass(link[i], 'active');
      addClass(tabs[i], 'active');// Добавить на нужные элементы активный класс 
    });
  }
}

function addClass(elems, className) {
  if (elems instanceof HTMLElement) {
    elems.classList.add(className);
    return;
  }

  for (var i = 0; i < elems.length; i++) {
    elems[i].classList.add(className);
  }
}

function removeClass(elems, className) {
  if (elems instanceof HTMLElement) {
    elems.classList.remove(className);
    return;
  }

  for (var i = 0; i < elems.length; i++) {
    elems[i].classList.remove(className);
  }
}

function setJsVoid(elems) {
  for (var i = 0; i < elems.length; i++) {
    elems[i].setAttribute('href', "javascript:void(0);");
  }
}


//accordion
var accordions = document.getElementsByClassName("product_accordion-title");

for (var i = 0; i < accordions.length; i++) {
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');

    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      // accordion is currently open, so close it
      content.style.maxHeight = null;
    } else {
      // accordion is currently closed, so open it
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }
}

//.Sliders initialization
window.addEventListener("load", function (e) {
  // Start sliders initialization
  initSliders();
});

/*Меню каталог*/
const catalog = () => { 
const headerMenuBurger = document.querySelector('.header-menu__catalog');

headerMenuBurger.addEventListener('click' , function() {
  headerMenuBurger.classList.toggle('active');
});

}
catalog();
/*/Меню каталог*/

/*Меню аккордеон*/
const accordion = () => { 
  const characteristicsListElem = document.querySelector('.header-menu_list'); // ul
  const characteristicsItemElems = document.querySelectorAll('.dropdown-block'); // li

  characteristicsItemElems.forEach(elem => { // откроем пункт меню если изначально есть .active
    if(elem.children[1].classList.contains('active')) {
      elem.children[1].style.height = `${elem.children[1].scrollHeight}px`; // узнали и задали высоту элемента (работает только если display !== none)
    }
  })

  const open = (button, dropDown) => {
    closeAllDrops();
    if(overlay.style.display === 'none'){
      overlay.style.display = '';
      overlay.classList.add('active');
    }
    dropDown.style.height = `${dropDown.scrollHeight}px`;
    button.classList.add('active');
    dropDown.classList.add('active');  
  };

  const close = (button, dropDown) => {
    if(overlay.style.display !== 'none'){
      overlay.style.display = 'none';
      overlay.classList.remove('active');
    }

    button.classList.remove('active');
    dropDown.classList.remove('active');
    dropDown.style.height = '';
  };

  const closeAllDrops = (button, dropDown) => {    
    characteristicsItemElems.forEach((elem) => {
      if (elem.children[0] !== button && elem.children[1] !== dropDown) {
          close(elem.children[0], elem.children[1]);
      }
    })
  };

  characteristicsListElem.addEventListener('click', (event) => {
    const target = event.target;
    if (target.classList.contains('header-menu_link')) {// делегирование события, если кликнули на нужный элемент
      const parent = target.closest('.dropdown-block'); // родитель обертка ul
      const description = parent.querySelector('.header-menu_body-drop');
      // если пункт меню открыт - закроем, в противном откроем
      description.classList.contains('active') ? 
          close(target, description) : 
          open(target, description);
    }
  });

  //закрывает аккордеон если кликнул мимо него
  document.body.addEventListener('click', (event) => {
    const target = event.target;
    if(!target.closest('.header-menu_list')) {
      closeAllDrops();
    }
  })
};
accordion();


// блоки с выпадаюшим списком
const dropDownBlock = document.querySelectorAll('.dropdown-block-curr'); 
  const toggleMenu = (headerDropdownList, headerBtnAdress) => {//добав. activ на кнопку и на выпадающий список
    headerDropdownList.classList.toggle('active');
    headerBtnAdress.classList.toggle('active');
  }

dropDownBlock.forEach(btn => {

    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const headerBtnAdress = btn.querySelector('.header__btn-curr'); //кнопка открытия меню
      const headerDropdownList = btn.querySelector('.header__dropdown-list'); //выпадающий список
      
      if(e.target.localName === 'a'){
        const linkContent = e.target.textContent;
        headerBtnAdress.textContent = linkContent;
      }
      
      toggleMenu(headerBtnAdress, headerDropdownList);

      document.addEventListener('click', e => {//навешиваем событие на весь документ
    
        let target = e.target; // получаем обьет события по которому был клик
        let its_headerDropdownList = target == headerDropdownList || headerDropdownList.contains(target); // true - если клик на подложку,или потомка подложки
        let its_headerBtnAdress = target == headerBtnAdress; // true если клдикнули на кнопку
        let headerDropdownList_is_active = headerDropdownList.classList.contains('active'); //true если уже список уже открыт
    
        if (!its_headerDropdownList && !its_headerBtnAdress && headerDropdownList_is_active) {
          toggleMenu(headerBtnAdress, headerDropdownList); //закрываем подложку если клик не на подложку, на кнопку и если подложка уже открыта
        } 
      });
    });
});

const currencyDropdown = document.querySelector('#currency');
const selectDropdownItems = currencyDropdown.querySelectorAll('.select-option>a');
const selectChecked = document.querySelector('.header__btn-curr');
selectDropdownItems.forEach(elem => {
    elem.addEventListener('click', e => {
        e.preventDefault();
        const target = e.target;
        const dataLink = target.getAttribute('data-id');
        selectChecked.innerHTML = dataLink;
        window.location = `currency/change${dataLink}`;
    });
});


function countFunc(count) {
  let btnPlus = count.querySelector('.js-plus-btn');
  let btnMinus = count.querySelector('.js-minus-btn');
  let field = count.querySelector('.js-number');
  let fieldValue = parseFloat(field.value, 10);

  btnMinus.addEventListener('click', function() {
    if (fieldValue > 1) {
        fieldValue--;
        field.value = fieldValue;
    } else {
        return 1;
    }
  });

  btnPlus.addEventListener('click', function() {
    fieldValue++;
    field.value = fieldValue;
  });
  
}
let counts = document.querySelectorAll('.product_card-quantity');
counts.forEach(countFunc);


/*Cart*/
  $(document).ready(function(){
    $('body').on('click', '.add-to-cart-link', function(e) {
        //отменить переход по ссылке
        e.preventDefault();
        var id = $(this).data('id'),//id товара
            gty = $('.product_card-quantity input').val() ? $('.product_card-quantity input').val() : 1;  //колличество
        $.ajax ({
            url: '/cart/add',
            data: {id: id, gty: gty},
            type: 'GET', 
            success: function(res) {
                showCart(res);
            },
            error: function() {
                alert('Ошибка! Попробуйте позже');
            }
        });
    });
    
  }); 

function showCart(cart) {
    if($.trim(cart) === '<h2>Корзина пуста</h2>') {
        $('#cart .cart__footer .cart__btn-design, #cart .cart__footer .cart__btn-clear').css('display', 'none');
    } else {
        $('#cart .cart__footer .cart__btn-design, #cart .cart__footer .cart__btn-clear').css('display', 'block');
    }

    //выводим в модальное окно содержимое корзины из вида 
    $('#cart .cart__body').html(cart);

    //показываем модальное окно
    $('.add-to-cart-link').click(function() {
      document.body.style="overflow: hidden";
      //overlay.style.cssText = 'display: block; z-index: 90000';
      $('.cart__fade').fadeIn();
      return false;
    });	
    
    $('.popup-close').click(function() {
      $(this).parents('.cart__fade').fadeOut();
      document.body.style.overflow="";
      return false;
    });		
   
    $(document).keydown(function(e) {
      if (e.keyCode === 27) {
        e.stopPropagation();
        $('.cart__fade').fadeOut();
        document.body.style.overflow="";		
      }
    });
    
    $('.cart__fade').click(function(e) {
      if ($(e.target).closest('.popup').length == 0) {
        $(this).fadeOut()
        document.body.style.overflow="";
      }	
    });
}
  
/*Cart*/

