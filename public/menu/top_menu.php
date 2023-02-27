<?$parent = isset($category['childs']);?>
<li class="header-menu_item dropdown-block">
    <?if(isset($category['childs'])):?>
      <button class="header-menu_link"><?=$category['title'];?></button>
    <?else:?>
      <a href="<?=$category['alias']?>" class="header-menu_link link"><?=$category['title']?></a>
    <?endif?>
    <div class="header-menu_body-drop">
      <div class="header-menu_drop-row">

      <?if(!empty($category['childs'])):?>
        <?foreach($category['childs'] as $key => $value):?>
          <div class="header-menu_drop-block">
              <p class="header-menu_drop-title"><?=$value['title']?></p>
              <?if(!empty($value['childs'])):?>
              <ul class="header-menu_drop-list">
                <?$arr = array_slice($value['childs'], 0, 4, true);?>
                <?$sections = count($value['childs']) - count($arr);?>
                  <?foreach($arr as $k => $v):?>
                    <li class="header-menu_drop-link"><a href="<?=$v['alias']?>"><?=$v['title']?></a></li>
                  <?endforeach?>
              </ul>
                <?if($sections != 0):?>
                    <p class="header-menu_drop-sections">Еще <?=$sections?></p>
                <?endif?>
              <?endif?>
              <a href="<?=$value['alias']?>" class="link-categories">Перейти в каталог</a>
          </div><!--/header-menu_drop-block-->
        <?endforeach?> 
      <?endif?>

      </div><!--header-menu_drop-row-->
    </div>
</li>