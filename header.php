<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
    <head>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=77553202&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/77553202/1_0_FFFFFFFF_FFFFFFFF_0_pageviews"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="77553202" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(77553202, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
   });

</script>
<noscript><div><img src="https://mc.yandex.ru/watch/77553202" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?
$credentials = include($_SERVER['DOCUMENT_ROOT']."/metrica.php");
global $USER;
if ($USER->IsAdmin()) 
{
echo "Вы администратор!";

}
else
{
echo '<a href=http://xn--80aegqc0cdgck7j.xn--p1ai/bitrix/admin/#authorize>Авторизироваться</a>';
}
?>
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

 <!-- Script -->
  <div class="side-line-menu__item dropdown">
<? $USER; # ID группы
if ($USER->IsAdmin()){
?>
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="Script" data-trigger="hover" data-placement="left" data-offset="0, 10" data-toggle="dropdown" id="side_cookies_dropdown_link">
					<span class="side-line-menu__icon side-line-menu__icon_menu"></span>
<?}
?>
                    </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
                                <div class="side-drop__title">Сценарии</div>
                                	<div class="side-drop__container">
                                   	 <div class="side-drop__text">
										 <ul>1. Пользователь хочет использовать другой язык ресурса</ul>
											<ul>1.1. Веб ресурс мультиязычен, пользователь может выбрать любой из предложенных языков(русский, английский)</ul>
											<ul>1.2. Пользователь выбирает требуемый язык</ul>
											<ul>1.3. Пользователь пользуется ресурсом на выбранном языке</ul>
											<ul>2. Пользователю требуется узнать контактную информацию</ul>
											<ul>2.1. На рсурсе есть несколько вариантов просмотра контактной информации</ul>
											<ul>2.2. Пользователь выбирает наиболее для него удобный (вкладка Контакты, либо меню справа)</ul>
											<ul>2.3. Пользователь просматриввает информацию о контактах</ul>
										<ul>3. Пользователь хочет заполнить форму для обратной связи</ul>
										<ul>	3.1. На ресурсе имеется несколько форм обратной связи, которыми может воспользоваться пользователь</ul>
										<ul>	3.2. Пользователь заполняет любую из предложенных форм (внизу страницы, меню справа)</ul>
										<ul>	3.3. Пользователь отправляет сообщение и ждет связи</ul>

                                   		 </div>
                                   			 <div class="side-drop__footer">


                                 		</div>
									</div> 
                               
							</div>
                        </div>
                    </div>
                </div>
                 <!--/ Script -->
 <!-- Adm -->
  <div class="side-line-menu__item dropdown">
<? $USER; # ID группы
if ($USER->IsAdmin()){
?>
                    <a href="javascript:void(0)" class="side-line-menu__link" data-tooltip title="Metrica" data-trigger="hover" data-placement="left" data-offset="0, 10" data-toggle="dropdown" id="side_cookies_dropdown_link">
					<span class="side-line-menu__icon side-line-menu__icon_menu"></span>
<?}
?> 
                   </a>
                    <div class="dropdown-menu side-line-menu__dropdown">
                        <div class="side-drop">
                            <div class="side-drop__wrapper">
                                <div class="side-drop__title">Metrica</div>
                                	<div class="side-drop__container">
                                   	 <div class="side-drop__text">
                                   		 </div>
                                   			 <div class="side-drop__footer">

<?
{
$credentials ['key'];

$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:pageDepth,ym:s:sumGoalReachesAny,ym:s:mobilePercentage,ym:s:bounceRate,ym:s:avgVisitDurationSeconds,ym:s:newUsers,ym:s:avgDaysBetweenVisits,ym:s:upTo24AgePercentage,ym:s:upTo34AgePercentage,ym:s:upTo44AgePercentage,ym:s:over44AgePercentage,ym:s:manPercentage,ym:s:womanPercentage',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' .$credentials ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);

$res = json_decode($res, true);	
//print_r($res);

// Глубина просмотра	
echo 'Глубина просмотра:',' ', $res['totals'][0][0], '%','<br>';

//Достижения любой цели
echo 'Количество всех достигнутых целей,','<br>' ,'которые были поставлены в метрике:', ' ', $res['totals'][0][1],'<br>';

//Мобильность	

echo 'Мобильность:', ' ', $res['totals'][0][2],'%','<br>';

//Отказы	

echo 'Отказы:', ' ', $res['totals'][0][3],'%','<br>';

//Время на сайте		

echo 'Время на сайте:', ' ', $res['totals'][0][4], 'мин','<br>';


//Новые пользователи		

echo 'Новые пользователи:', ' ', $res['totals'][0][5],'<br>';

//Среднее колво дней между визитами

echo 'Дни между визитами:', ' ', $res['totals'][0][6],'<br>';

//Возрастные категории пользователей

echo 'Визиты пользователей:','<br>';
echo '18-24 лет',' ', $res['totals'][0][7],'%','<br>';
echo '25-34 лет',' ', $res['totals'][0][8],'%','<br>';
echo '35-45 лет',' ', $res['totals'][0][9],'%','<br>';
echo '45+',' ', $res['totals'][0][10],'%','<br>';

//Гендер
echo 'Гендер:','<br>';

echo 'Доля мужчин на сайте:',' ', $res['totals'][0][11],'%','<br>';
echo 'Доля женщин на сайте:',' ', $res['totals'][0][12],'%','<br>';
}
?>


                                 		</div>
									</div> 
                               
							</div>
                        </div>
                    </div>
                </div>
                 <!--/ Adm -->


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
<pre>

<?php
$credentials['key'];
 
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:cookieEnabledPercentage',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $credentials));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
//print_r($res);
// cookies	
echo 'Доля визитов с вкл. cookies:','<br>', $res['totals'][0][0], '%','<br>';
}

?>
</pre>
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
<pre>

<?php
global $USER;
    if($USER->IsAdmin())
	{
$credentials ['key'];
 
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal181227619visits',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $credentials));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
//print_r($res);
// Число визитов при переходе на обратную связь	
echo 'Число визитов, в которые достигнуты цели:','<br>';
echo 'Переход на обратную связь:',' ', $res['totals'][0][0],'<br>';

}
?>
</pre>
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

<pre>

<?php
global $USER;
    if($USER->IsAdmin())
	{
$credentials ['key'];
 
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal182863177visits',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $credentials));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
//print_r($res);
// Число визитов, при которых достигнуты цели:
echo 'Число визитов, в которые достигнуты цели:','<br>';
echo 'Вызов номера:',' ', $res['totals'][0][0],'<br>';

	}

?>
</pre>
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
<pre>

<?php
global $USER;
    if($USER->IsAdmin())
	{
$credentials ['key'];
 
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal185459002visits',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $credentials));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
//print_r($res);
// Число визитов, при которых достигнуты цели:
echo 'Число визитов, в которые достигнуты цели:','<br>';
echo 'Клик по email:',' ', $res['totals'][0][0],'<br>';
	}

?>
</pre>
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
<pre>

<?php
global $USER;
    if($USER->IsAdmin())
	{

$credentials ['key'];
 
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal181226827visits',
	'date1'   => '6daysAgo', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);

$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?'. urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $credentials));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
//print_r($res);
// Число визитов, при переходе на Контакты	
echo 'Число визитов, при переходе на данную вкладку:','<br>', $res['totals'][0][0],'<br>';

}
?>
</pre>
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
    