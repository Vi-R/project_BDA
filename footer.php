    </main>

    <!-- Footer partial -->
    <footer class="footer">

        <div class="footer__area" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/template/footer.png')">
            <div class="footer__wrapper">
                <div class="footer__logo-column">
                    <div class="footer__logo-place">
                        <a href="/" class="footer-logo">
                            <?php
                            $logoSrc = SITE_TEMPLATE_PATH . '/img/template/logo_' . mb_strtoupper(LANGUAGE_ID). '.png';
                            ?>
                            <img class="footer-logo__img" src="<?= $logoSrc ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="footer__card-column footer__card-column_1">
                    <div class="footer-card">
                        <div class="footer-card__content">
                            <div class="footer-card-mark">
                                <div class="footer-card-mark__plus"></div>
                                <div class="footer-card-mark__square"></div>
                            </div>
                            <div class="footer-card__title"><?= GetMessage("FOOTER_SOLUTION_TITLE") ?></div>
                            <?
                            if (CModule::IncludeModule("iblock")) {
                                $techResult = CIBlockElement::GetList(
	                                array('active_from' => 'desc', 'sort' => 'asc'),
	                                array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'),
                                    false,
                                    false,
                                    array('ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'PROPERTY_RU_NAME')
	                            );
                            ?>
                            <div class="footer-card-list">
	                            <? while ($tech = $techResult->GetNext()): ?>
                                <div class="footer-card-list__item">
                                    <a href="<?= $tech['DETAIL_PAGE_URL']?>" class="footer-card-list__link"><?= LANGUAGE_ID == 'ru' ? $tech['PROPERTY_RU_NAME_VALUE'] : $tech['NAME']?></a>
                                </div>
                                <? endwhile; ?>
                            </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
                <div class="footer__card-column footer__card-column_2">
                    <div class="footer-card">
                        <div class="footer-card__content">
                            <div class="footer-card-mark">
                                <div class="footer-card-mark__plus"></div>
                                <div class="footer-card-mark__square"></div>
                            </div>
                            <div class="footer-card__title"><?= GetMessage("FOOTER_MENU_TITLE") ?></div>
                            <?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"footer-menu", 
								array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "footer",
									"DELAY" => "N",
									"MAX_LEVEL" => "1",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"ROOT_MENU_TYPE" => "footer",
									"USE_EXT" => "N",
									"COMPONENT_TEMPLATE" => "footer-menu"
								),
								false
							);?>
                        </div>
                    </div>
                </div>
                <div class="footer__card-column footer__card-column_3">
                    <div class="footer-card">
                        <div class="footer-card__content">
                            <div class="footer-card-mark">
                                <div class="footer-card-mark__plus"></div>
                                <div class="footer-card-mark__square"></div>
                            </div>
                            <div class="footer-card__title"><?= GetMessage("FOOTER_CONTACTS_TITLE") ?></div>
                            <div class="footer-card-list">
                                <div class="footer-card-list__item">
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
                                <div class="footer-card-list__item">
                                    <img style="position: relative;top: -2px;" class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_phone_neww1.png">
                                    <img style="position: relative;top: -2px;" class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_telegram_neww1.png">
                                    <img style="position: relative;top: -2px;" class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_whatsupp_neww1.png">
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
                                <div class="footer-card-list__item">
                                    <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_email_new_1w.png">
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
                                <div class="footer-card-list__item">
                                    <img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_facebook_new_1w.png">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/facebook.php"
										)
									);?>
								</div>
                                <div class="footer-card-list__item">
									<img class="contacts-card__img" alt="" src="<?= SITE_TEMPLATE_PATH ?>/img/content/marker_inst_new_1w.png">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/instagram.php"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__card-column footer__card-column_4">
                    <div class="footer-card">
                        <div class="footer-card__content">
                            <div class="footer-card-mark">
                                <div class="footer-card-mark__plus"></div>
                                <div class="footer-card-mark__square"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>

    <div class="modal" id="form-send-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= GetMessage('FOOTER_FORM_MODAL_TITLE') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?= GetMessage('FOOTER_FORM_MODAL_TEXT') ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?= GetMessage('FOOTER_FORM_MODAL_CLOSE') ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/vendors/jquery/dist/jquery.min.js?v=1"></script>

    <!-- All included libraries -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js?v=1"></script>

    <!-- Users Scripts -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/scripts.js?v=2"></script>
    </body>
</html>
