<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
    <head>
<?
$APPLICATION->SetTitle("ANT Technologies");
?>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?php $APPLICATION->ShowTitle(); ?></title>

        <?php $APPLICATION->ShowHead(); ?>

        <!-- Main CSS -->
        <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.png" />

        <!-- Included CSS libraries and Main Site styles -->
        <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/main.css?v=1">

        <!-- Custom User Styles -->
        <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/custom.css?v=8">

        <!-- JS min Viewport helper -->
        <script src="<?= SITE_TEMPLATE_PATH ?>/vendors/viewport.js?v=1"></script>

        <?php
        $currentPage = $APPLICATION->GetCurPage(true);
        $isRootPage = $currentPage == '/index.php' || $currentPage == '/ru/index.php';
        ?>
    </head>
<body class="<?= (!$isRootPage && $currentPage != '/technologies/index.php' && $currentPage != '/ru/technologies/index.php') ? 'inner-page' : '' ?>">


    <?php $APPLICATION->ShowPanel(); ?>
    <div class="page-wrapper">
        <div class="side-line">
            <div class="side-line-menu">


 


                <!-- Menu -->
                <div class="side-line-menu__item dropdown">
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="<?= GetMessage('HEADER_MENU_TITLE') ?>" data-trigger="hover" data-placement="left" data-offset="0, 10" data-toggle="dropdown">
                        <span class="side-line-menu__icon side-line-menu__icon_menu"></span>
                    </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
                                <div class="side-drop__title">Menu</div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "side-drop-menu",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "side_drop",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "side_drop",
                                        "USE_EXT" => "N",
                                        "COMPONENT_TEMPLATE" => "side-drop-menu"
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Menu -->

                <!-- Cookies -->
                <div class="side-line-menu__item dropdown">
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="Cookie" data-trigger="hover" data-placement="left" data-offset="0, 10" data-toggle="dropdown" id="side_cookies_dropdown_link">
                        <span class="side-line-menu__icon side-line-menu__icon_cookie"></span>
                    </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
                                <div class="side-drop__title">Cookies</div>
                                <div class="side-drop__container">
                                    <div class="side-drop__text">
                                        <?= GetMessage('HEADER_COOKIES_TEXT') ?>
                                    </div>
                                    <div class="side-drop__footer">
                                        <button class="btn btn-block btn-outline-dark side-drop__btn" onclick="$('#side_cookies_dropdown_link').dropdown('toggle')"><?= GetMessage('HEADER_COOKIES_CLOSE')?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Cookies -->

                <!-- Email -->
                <div class="side-line-menu__item dropdown">
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="<?= GetMessage('HEADER_SEND_MESSAGE') ?>" data-html="true" data-offset="0, 10" data-trigger="hover" data-placement="left" data-toggle="dropdown">
                        <span class="side-line-menu__icon side-line-menu__icon_email"></span>
                    </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
								<div class="side-drop__title"><?= GetMessage('HEADER_SEND_FORM') ?></div><div>
                                <div class="side-drop__container">
	                                <? if (isset($_REQUEST['formresult']) && $_REQUEST['formresult'] == 'addok'): ?>
	                                <div class="side-drop__text">
		                                <div><?= GetMessage('HEADER_SEND_FORM_SUCCESS') ?></div>
										</div>
	                                <? else: ?>
	                                <?$APPLICATION->IncludeComponent(
										"bitrix:form.result.new", 
										"right-sidebar-form", 
										array(
											"CACHE_TIME" => "3600",
											"CACHE_TYPE" => "A",
											"CHAIN_ITEM_LINK" => "",
											"CHAIN_ITEM_TEXT" => "",
											"EDIT_URL" => "",
											"IGNORE_CUSTOM_TEMPLATE" => "N",
											"LIST_URL" => "",
											"SEF_FOLDER" => "/",
											"SEF_MODE" => "Y",
											"SUCCESS_URL" => "",
											"USE_EXTENDED_ERRORS" => "N",
											"WEB_FORM_ID" => "2",
											"COMPONENT_TEMPLATE" => ".default"
										),
										false
									);?>
									<? endif; ?>
                                </div>
                </div>

                            </div>
                        </div>
                    </div>
				</div>

                <!-- / Email -->

                <!-- Contacts -->
                <div class="side-line-menu__item dropdown">
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="<?= GetMessage('HEADER_CONTACTS') ?>" data-trigger="hover" data-placement="left" data-offset="0, 10" data-toggle="dropdown">
                        <span class="side-line-menu__icon side-line-menu__icon_map"></span>
                    </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
                                <div class="side-drop__title"><?= GetMessage('HEADER_CONTACTS') ?></div>
                                <div class="side-drop__container">
                                    <ul class="side-drop-contacts list-unstyled">
                                        <li class="side-drop-contacts__item">
                                            <div class="side-drop-contacts__title"><?= GetMessage('HEADER_PHONE') ?></div>
                                            <div class="side-drop-contacts__value">
                                                <?$APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"EDIT_TEMPLATE" => "",
														"PATH" => "/include/phone.php"
													)
												);?>


                                            </div>
                                        </li>
                                        <li class="side-drop-contacts__item">
                                            <div class="side-drop-contacts__title">E-mail</div>
                                            <div class="side-drop-contacts__value">
                                                <?$APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"EDIT_TEMPLATE" => "",
														"PATH" => "/include/mail.php"
													)
												);?>

                                            </div>
                                        </li>
                                        <li class="side-drop-contacts__item">
                                            <div class="side-drop-contacts__title"><?= GetMessage('HEADER_SOCIAL') ?></div>
                                            <div class="side-drop-contacts__value side-drop-contacts__value_social">
                                                <?$APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"EDIT_TEMPLATE" => "",
														"PATH" => "/include/facebook-icon.php"
													)
												);?>
                                                <?$APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => "/include/instagram-icon.php"
                                                    )
                                                );?>
                                            </div>
                                        </li>
                                        <li class="side-drop-contacts__item">
                                            <div class="side-drop-contacts__title"><?= GetMessage('HEADER_ADDRESS') ?></div>
                                            <div class="side-drop-contacts__value">
                                                <?
                                                $addressFile = "/include/address_".LANGUAGE_ID.".php";
                                                $APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"AREA_FILE_SUFFIX" => "",
														"EDIT_TEMPLATE" => "",
														"PATH" => $addressFile
													)
												);?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Contacts -->
            </div>
            <div class="side-line-langs dropdown">
                <a href="javascript:void(0)" class="side-line-langs__link" data-toggle="dropdown">
                    <span class="side-line-langs__icon" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_<?= LANGUAGE_ID ?>.png)"></span>
                </a>
                <div class="dropdown-menu side-line-langs__menu">
                    <a href="?" class="side-line-langs__menu-link">
                        <span class="side-line-langs__icon side-line-langs__icon_big" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_fr.png)"></span>
                    </a>
                    <a href="?" class="side-line-langs__menu-link">
                        <span class="side-line-langs__icon side-line-langs__icon_big" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_sp.png)"></span>
                    </a>
                    <a href="<?= (LANGUAGE_ID == 'en') ? '/ru/' : '/'?>" class="side-line-langs__menu-link">
                        <span class="side-line-langs__icon side-line-langs__icon_big" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_<?= (LANGUAGE_ID == 'en') ? 'ru' : 'en'?>.png)"></span>
                    </a>
				</div>
                </div>
            </div>

            <a href="#" class="side-line__arrow js-side-line-scroll" id="side_scroll"></a>
        </div>

        <div class="intro__wrapper" id="intro-wrapper">
            <div class="intro__move-content" id="intro-move">
                <header class="header">
                    <div class="header__wrapper">
                        <div class="header-logo">
                            <a href="<?= SITE_DIR ?>">
                                <?php
                                $logoSrc = SITE_TEMPLATE_PATH . '/img/template/logo_' . mb_strtoupper(LANGUAGE_ID). '.png';
                                ?>
                                <img class="header-logo__img" src="<?= $logoSrc ?>" alt="ANT Technologies">
                            </a>
                        </div>
                        <div class="header__center">
                            <div>
                                <a href="mailto:ant-russia@mail.ru" class="header-contact">
                                    <span class="text-primary">office@ant-roads.com</span>
                                </a>
                            </div>
                        </div>
                        <div class="header__right">
                            <ul class="header-langs">
                                <li class="header-langs__item <?= (LANGUAGE_ID == 'en') ? 'active' : '' ?>">
                                    <a href="/" class="header-langs__link" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_en.png)"></a>
                                </li>
                                <li class="header-langs__item <?= (LANGUAGE_ID == 'fr') ? 'active' : '' ?>">
                                    <a href="?" class="header-langs__link" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_fr.png)"></a>
                                </li>
                                <li class="header-langs__item <?= (LANGUAGE_ID == 'sp') ? 'active' : '' ?>">
                                    <a href="?" class="header-langs__link" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_sp.png)"></a>
                                </li>
                                <li class="header-langs__item <?= (LANGUAGE_ID == 'ru') ? 'active' : '' ?>">
                                    <a href="/ru/" class="header-langs__link" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/template/icons/lang_ru.png)"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-menu">
                        <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "header-top-menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => 'header_top',	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => 'header_top',	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
                    </div>
                </header>
                <div class="intro js-intro-animate <?= ($currentPage == '/technologies/index.php' || $currentPage == '/ru/technologies/index.php') ? 'technologies-page' : ''?>" id="intro">
                    <?php
                    $sliderBg = SITE_TEMPLATE_PATH;
                    if ($isRootPage) {
                        $sliderBg .= '/img/template/bg.jpg';
                    } elseif (strpos($currentPage, '/projects/') !== false) {
                        $sliderBg .= '/img/template/projects_bg.jpg';
                    } elseif (strpos($currentPage, '/contacts/') !== false) {
                        $sliderBg .= '/img/template/contacts_bg.jpg';
                    } elseif (strpos($currentPage, '/news/') !== false) {
                        $sliderBg .= '/img/template/news_bg.jpg';
                    } elseif (strpos($currentPage, '/partners/') !== false) {
                        $sliderBg .= '/img/template/partners_bg.jpg';
                    } elseif (strpos($currentPage, '/videos/') !== false) {
                        $sliderBg .= '/img/template/videos_bg.jpg';
                    } else {
                        $sliderBg .= '/img/template/technologies_bg.jpg';
                    }
                    ?>
                    <div class="intro-bg" style="background-image: url('<?= $sliderBg ?>')"></div>
                    <div class="intro-sections js-intro-sections">
                        <div class="intro-sections__item intro-sections__item_1"></div>
                        <div class="intro-sections__item intro-sections__item_2"></div>
                        <div class="intro-sections__item intro-sections__item_3"></div>
                        <div class="intro-sections__item intro-sections__item_4"></div>
                        <div class="intro-sections__item intro-sections__item_5"></div>
                        <div class="intro-sections__item intro-sections__item_6"></div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "header-techs",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "0",
                            "CACHE_TYPE" => "N",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "4",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "RU_NAME",
                                1 => "RU_PREVIEW_TEXT",
                                2 => "INDEX_BANNER_TEXT",
                                3 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "header-techs"
                        ),
                        false
                    );?>
                    <div class="intro-slider__wrapper">
<!--                        --><?//$APPLICATION->IncludeComponent(
//                            "bitrix:news.list",
//                            "header-slider",
//                            array(
//                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
//                                "ADD_SECTIONS_CHAIN" => "N",
//                                "AJAX_MODE" => "N",
//                                "AJAX_OPTION_ADDITIONAL" => "",
//                                "AJAX_OPTION_HISTORY" => "N",
//                                "AJAX_OPTION_JUMP" => "N",
//                                "AJAX_OPTION_STYLE" => "Y",
//                                "CACHE_FILTER" => "N",
//                                "CACHE_GROUPS" => "Y",
//                                "CACHE_TIME" => "36000000",
//                                "CACHE_TYPE" => "A",
//                                "CHECK_DATES" => "Y",
//                                "DETAIL_URL" => "",
//                                "DISPLAY_BOTTOM_PAGER" => "N",
//                                "DISPLAY_DATE" => "N",
//                                "DISPLAY_NAME" => "Y",
//                                "DISPLAY_PICTURE" => "N",
//                                "DISPLAY_PREVIEW_TEXT" => "N",
//                                "DISPLAY_TOP_PAGER" => "N",
//                                "FIELD_CODE" => array(
//                                    0 => "NAME",
//                                    1 => "",
//                                ),
//                                "FILTER_NAME" => "",
//                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                                "IBLOCK_ID" => "1",
//                                "IBLOCK_TYPE" => "content",
//                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//                                "INCLUDE_SUBSECTIONS" => "N",
//                                "MESSAGE_404" => "",
//                                "NEWS_COUNT" => "",
//                                "PAGER_BASE_LINK_ENABLE" => "N",
//                                "PAGER_DESC_NUMBERING" => "N",
//                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                                "PAGER_SHOW_ALL" => "N",
//                                "PAGER_SHOW_ALWAYS" => "N",
//                                "PAGER_TEMPLATE" => ".default",
//                                "PAGER_TITLE" => "Новости",
//                                "PARENT_SECTION" => "",
//                                "PARENT_SECTION_CODE" => "",
//                                "PREVIEW_TRUNCATE_LEN" => "",
//                                "PROPERTY_CODE" => array(
//                                    0 => "INDEX_BANNER_TEXT",
//                                    1 => "",
//                                ),
//                                "SET_BROWSER_TITLE" => "N",
//                                "SET_LAST_MODIFIED" => "N",
//                                "SET_META_DESCRIPTION" => "N",
//                                "SET_META_KEYWORDS" => "N",
//                                "SET_STATUS_404" => "N",
//                                "SET_TITLE" => "N",
//                                "SHOW_404" => "N",
//                                "SORT_BY1" => "ACTIVE_FROM",
//                                "SORT_BY2" => "SORT",
//                                "SORT_ORDER1" => "DESC",
//                                "SORT_ORDER2" => "ASC",
//                                "STRICT_SECTION_CHECK" => "N",
//                                "COMPONENT_TEMPLATE" => "header-slider",
//                                "DISPLAY_INDEX_BANNER_TEXT" => "Y"
//                            ),
//                            false
//                        );?>
                        <div class="intro-slider js-intro-slider">
                            <div class="intro-slider-item">
                                <div class="intro-slider-item__title">
                                    <?php $APPLICATION->ShowTitle(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main" id="main">
        <?
        if (!$isRootPage && $currentPage != '/technologies/index.php' && $currentPage != '/ru/technologies/index.php') {
            $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
                    "PATH" => "",	// Path for which the navigation chain is to be built (by default, the current site)
                    "SITE_ID" => SITE_ID,	// Site (used in multi-site version, if sites have different DOCUMENT_ROOT)
                    "START_FROM" => "0",	// Ordinal of item from which to build the chain
                ),
                false
            );
        }
        ?>
    