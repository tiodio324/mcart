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
              <h2><?echo GetMessage("CUSTOM_LABEL")?></h2>
            </div>
          </div>
        </div>
        <div class="mb-5">
        <?if (!empty($arResult['AGENTS']['ITEMS'])): ?>
            <?foreach ($arResult['AGENTS']['ITEMS'] as $agent): ?>
                <div class="agent__card">
                    <div class="small-info">
                        <?
                        // Определяем путь к фото
                        $photoPath = $agent['UF_AVATAR_PATH'] ?? '';
                        if (empty($photoPath)) {
                            $photoPath = $templateFolder . '/images/no-avatar.png';
                        }
                        ?>
                        <div class="avatar" style="background-image: url('<?=$photoPath?>');"></div>
                        <div class="info">
                            <div class="name"><?=$agent['UF_FULLNAME']?></div>
                        </div>
                    </div>
                    <div class="agent__card_item">
                        <div class="agent__card_info">
                            <div class="card__info_item">
                                <div class="position"><?echo GetMessage("CUSTOM_EMAIL")?></div>
                                <div class="name"><?=$agent['UF_EMAIL'] ?? ''?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position"><?echo GetMessage("CUSTOM_PHONE")?></div>
                                <div class="name"><?=$agent['UF_PHONE'] ?? ''?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position"><?echo GetMessage("CUSTOM_ACTIVITY_TYPE")?></div>
                                <div class="name"><?=$agent['UF_ACTIVITY_TYPE_VALUE'] ?? ''?></div>
                            </div>
                        </div>
                    </div>
                    <?
                    // Определяем, находится ли агент в избранном
                    $inFavorites = in_array($agent['ID'], $arResult['STAR_AGENTS']);
                    $starClass = $inFavorites ? 'star active' : 'star';
                    ?>
                    <a class="<?=$starClass?>" data-agent-id="<?=$agent['ID']?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            <?endforeach;?>
        <?else:?>
            <p><?echo GetMessage("CUSTOM_NO_AGENTS")?></p>
            <?endif;?>

        </div>
        <?if (!empty($arResult['AGENTS']['NAV_OBJECT'])): ?>
            <div class="pagination-container">
                <?
                    $APPLICATION->IncludeComponent("bitrix:main.pagenavigation", "agents", Array(
	                    "NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"],
	                    	"SEF_MODE" => "N",
	                    	"COMPONENT_TEMPLATE" => ".default"
	                    ),
	                    false
                    );
                ?>
            </div>
        <?endif;?>
      </div>
    </div>
</div>
