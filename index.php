<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>


    <div class="container">
        <div class="who-we">
            <div class="who-we__image-place" data-aos="fade-in" data-aos-duration="500">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/J1TPtHBIq24" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="section__header">
                <div class="section__title text-center">
                    Welcome to<br>ANT-Engineering, LLC!
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 who-we-1" data-aos="fade-up">
                    <div class="who-we__text">
	                    <?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/index-text-who-we-1.php"
							)
						);?>
					</div>
                </div>
                <div class="w-100" data-aos="fade-up">
                    <button class="btn" id="show-more">Show more <img class="img-fluid ml-3" src="<?= SITE_TEMPLATE_PATH?>/img/template/icons/show-more-icon.png"></button>
                </div>
                <div class="col-sm-12 d-none who-we-2">
                    <div class="who-we__text">
	                    <?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/index-text-who-we-2.php"
							)
						);?>
					</div>
                </div>
            </div>
        </div>
    </div>


    <div class="index-show__area" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/content/cards_bg.jpg')">
        <div class="index-show">
	         <?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"index-news", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
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
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "6",
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
						0 => "",
						1 => "",
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
					"COMPONENT_TEMPLATE" => "index-news"
				),
				false
			);?>
        </div>
    </div>



    <div class="section section_contacts">
        <div class="container">
            <div class="section__header">
                <div class="section__title">
                    Contacts us
                </div>
            <div class="index-contacts">
                <div class="row index-contacts__row">
                    <div class="col-md-4 index-contacts__col">
                        <div class="contacts-card contacts-card_address">
                            <div class="contacts-card__image-place">
                                <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_pin.png">
                            </div>
                            <div class="contacts-card__title">Address</div>
                            <div class="contacts-card__desc">
	                            <?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/include/address_en.php"
									)
								);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 index-contacts__col">
                        <div class="contacts-card">
                            <div class="contacts-card__image-place">
                                <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_phone.png">
                            </div>
                            <div class="contacts-card__title">Phone</div>
                            <div class="contacts-card__desc">
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
								<br>
                                <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_telegram_new_1.png">
								<img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_whatsupp_new_1.png">
                            </div>
                        </div>
<pre>

<?php

$credentials ['key'];
global $USER;
    if($USER->IsAdmin())
	{
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal182863177visits,ym:s:goal185459002visits',
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
echo 'Вызов номера:',' ',$res['totals'][0][0],'<br>';
}

?>
</pre>
                    </div>                    
                    <div class="col-md-4 index-contacts__col">
                        <div class="contacts-card contacts-card_facebook">
                            <div class="contacts-card__image-place">
                                <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_social_new.png">
                            </div>
                            <div class="contacts-card__title">Сontact us</div>
                            <div class="contacts-card__desc">
								<ul class="list-social-media">
									<li><img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_email_new_1.png"><?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/include/mail.php"
									)
									);?></li>
									<li><img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_facebook_new_1.png"><?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/facebook.php"
										)
									);?>
									</li>
									<li><img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_inst_new_1.png"><?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/instagram.php"
										)
									);?>
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
                </div>
            </div>
        </div>
    </div>

    <div class="section section_contacts-form">
        <div class="container">
            <div class="section__header">
                <div class="section__title title-webform">
                    Or send message:
                </div>
 <pre>

<?php
global $USER;
    if($USER->IsAdmin())
	{
$credentials ['key'];
$params = array(
	'ids'     => '77553202', 
	'metrics' => 'ym:s:goal181226134visits',
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
// Число визитов, при заполнении формы	
echo 'Число визитов, в которые достигнуты цели:','<br>';
echo 'Взаимодействия с формой:',' ', $res['totals'][0][0],'<br>';
}

?>
</pre>  
            </div>
            
            <? if (isset($_REQUEST['formresult']) && $_REQUEST['formresult'] == 'addok'):?>
            <p class="index-form-alert">Your message has sent successfully!</p>
            <? else: ?>
            <div class="index-form">
            	<?$APPLICATION->IncludeComponent(
					"bitrix:form.result.new", 
					"index-form", 
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
						"WEB_FORM_ID" => "1",
						"COMPONENT_TEMPLATE" => "index-form"
					),
					false
				);?>
            </div>
            <? endif; ?>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>