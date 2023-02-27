<button class="header__btn-curr"><?=$this->currency['code']?></button>
<ul class="header__dropdown-list "  id="currency">
  <?foreach($this->currencies as $key => $value):?>
    <?if($this->currency['code'] != $key):?>
      <li class="select-option" data-value="<?=$key?>">
        <a href="#" data-id="<?='?curr='.$key?>"><?=$key?></a>
      </li>
    <?endif?>
  <?endforeach?>  
</ul>
