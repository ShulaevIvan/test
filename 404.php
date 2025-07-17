<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

<style>
	.error-page {
		min-height: 50vh;
		padding: 30px 0;
	}
	.error-page__header {
		text-align: center;
		font-weight: 600;
		margin-bottom: 15px;
	}
	.error-page__text {
		text-align: center;
	}
	.error-page__text:not(:last-child) {
		margin-bottom: 15px;
	}
</style>

<div class="container">
	<div class="bx-404-container error-page">
		<div class="bx-404-block error-page__header" style="margin: 0 auto 20px;"><img src="<?=SITE_DIR?>images/404.png" alt=""></div>
		<div class="bx-404-text-block error-page__text" style="font-weight: 600;">Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</div>
		<div class="error-page__text">Вернитесь на <a href="<?=SITE_DIR?>">главную</a> или воспользуйтесь картой сайта.</div>
	</div>
</div>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>