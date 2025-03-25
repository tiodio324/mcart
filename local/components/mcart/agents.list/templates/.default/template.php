<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="site-wrap">
<div class="site-section site-section-sm bg-light">
      <div class="container agents-list">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2><?GetMessage("CUSTOM_LABEL")?></h2>
            </div>
          </div>
        </div>
        <div class="mb-5">



            <div class="agent__card">
                <div class="small-info">
                    <div class="avatar" style="background-image: url(images/person_1.jpg);"></div>
                    <div class="info">
                        <div class="name">Авдеев Святослав</div>
                    </div>
                </div>
                <div class="agent__card_item">
                    <div class="agent__card_info">
                        <div class="card__info_item">
                            <div class="position"><?GetMessage("CUSTOM_EMAIL")?></div>
                            <div class="name">avdeev@gmail.com</div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?GetMessage("CUSTOM_PHONE")?></div>
                            <div class="name">+7 (431) 434-42-43</div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?GetMessage("CUSTOM_ACTIVITY_TYPE")?></div>
                            <div class="name">Брокер</div>
                        </div>
                    </div>
                </div>
                <a class="star">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	        <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
      </div>
    </div>
</div>

<?
echo '<pre>';
print_r($arResult); // для разработки в конечном коде убрать
echo '</pre>';
?>
