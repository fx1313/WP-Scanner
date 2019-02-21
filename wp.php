<?php
# ShinChan - N45HT - N45HT.WEB.ID
# fb.com/angelia.put - fb.com/ShinChan.admin - fb.com/N45HTOfficial - fb.com/groups/N45HTOfficial
# shinchan0x1945@gmail.com

# WordPress Vulnerability Scanner - coded by ShinChan | copyright ShinChan@2017#

echo "
  ___  _  _  __  _  _  __  _  _   __   _  _     _    _  ____  ___ 
 / __)( )( )(  )( \( )/ _)( )( ) (  ) ( \( )   ( \/\/ )(_  _)(  _)
 \__ \ )__(  )(  )  (( (_  )__(  /__\  )  (  ___\    /   )(   ) _)
 (___/(_)(_)(__)(_)\_)\__)(_)(_)(_)(_)(_)\_)(___)\/\/   (__) (_)  
      WordPress Vulnerability Scanner - coded by ShinChan

     Thanks to :  PETR03X - Comod0x - SCYTHE404_LOL - Grav3
                        All Members N45HT


";
echo "Input your target (ex:victim.com) : ";
$target = trim(fgets(STDIN));
$totalvuln = "0";
$totalnotvuln = "0";

if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
	$targets = "http://$target";
}else{
	$targets = $target;
}

echo "\n[~] Scanning => $targets";

/* Exploit WordPress Plugin Work The Flow File Upload 2.5.2 - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Plugin Work The Flow File Upload 2.5.2";
$urlwtf = "$targets/wp-content/plugins/work-the-flow-file-upload/public/assets/jQuery-File-Upload-9.5.0/server/php/index.php";
$curlwtf = curl_init();
curl_setopt($curlwtf, CURLOPT_URL, $urlwtf);
curl_setopt($curlwtf, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlwtf, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlwtf);
$httpCode = curl_getinfo($curlwtf, CURLINFO_HTTP_CODE);
curl_close($curlwtf);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Plugin Work The Flow File Upload 2.5.2";
	echo "\n    > Tutorial : http://skamason.com/7IBw\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Plugin Work The Flow File Upload 2.5.2 - ShinChan - N45HT */

/* Exploit WordPress mTheme-Unus Local File Inclusion - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress mTheme-Unus Local File Inclusion";
$urltu = "$targets/wp-content/themes/mTheme-Unus/css/css.php";
$curltu = curl_init();
curl_setopt($curltu, CURLOPT_URL, $urltu);
curl_setopt($curltu, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curltu, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curltu);
$httpCode = curl_getinfo($curltu, CURLINFO_HTTP_CODE);
curl_close($curltu);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress mTheme-Unus Local File Inclusion";
	echo "\n    > Tutorial : http://skamason.com/7IPO\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress mTheme-Unus Local File Inclusion - ShinChan - N45HT */

/* Exploit WordPress Job-Manager - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Job-Manager";
$urljm = "$targets/jm-ajax/upload_file";
$curljm = curl_init();
curl_setopt($curljm, CURLOPT_URL, $urljm);
curl_setopt($curljm, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curljm, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curljm);
$httpCode = curl_getinfo($curljm, CURLINFO_HTTP_CODE);
curl_close($curljm);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Job-Manager";
	echo "\n    > Tutorial : http://skamason.com/7IUS\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Job-Manager - ShinChan - N45HT */

/* Exploit WordPress Plugin Gallery 3.06 - Arbitrary File Upload - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Plugin Gallery 3.06 - Arbitrary File Upload";
$urlpg = "$targets/wp-content/plugins/gallery-plugin/upload/php.php";
$curlpg = curl_init();
curl_setopt($curlpg, CURLOPT_URL, $urlpg);
curl_setopt($curlpg, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlpg, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlpg);
$httpCode = curl_getinfo($curlpg, CURLINFO_HTTP_CODE);
curl_close($curlpg);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Plugin Gallery 3.06 - Arbitrary File Upload";
	echo "\n    > Tutorial : http://skamason.com/7IVq\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Plugin Gallery 3.06 - Arbitrary File Upload - ShinChan - N45HT */

/* Exploit WordPress Plugin Photo Gallery 1.2.5 - Unrestricted Arbitrary File Upload - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Plugin Photo Gallery 1.2.5 - Unrestricted Arbitrary File Upload";
$urlppg = "$targets/wp-admin/admin-ajax.php?action=bwg_UploadHandler&dir=rce/";
$curlppg = curl_init();
curl_setopt($curlppg, CURLOPT_URL, $urlppg);
curl_setopt($curlppg, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlppg, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlppg);
$httpCode = curl_getinfo($curlppg, CURLINFO_HTTP_CODE);
curl_close($curlppg);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Plugin Photo Gallery 1.2.5 - Unrestricted Arbitrary File Upload";
	echo "\n    > Tutorial : http://skamason.com/7IXX\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Plugin Photo Gallery 1.2.5 - Unrestricted Arbitrary File Upload - ShinChan - N45HT */

/* Exploit WordPress 4.7.0/4.7.1 Content Injection - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress 4.7.0/4.7.1 Content Injection";
$urlci = "$targets/wp-json/wp/v2/posts";
$curlci = curl_init();
curl_setopt($curlci, CURLOPT_URL, $urlci);
curl_setopt($curlci, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlci, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlci);
$httpCode = curl_getinfo($curlci, CURLINFO_HTTP_CODE);
curl_close($curlci);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress 4.7.0/4.7.1 Content Injection";
	echo "\n    > Tutorial : http://skamason.com/7IcE or http://skamason.com/7IeF\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress 4.7.0/4.7.1 Content Injection - ShinChan - N45HT */

/* Exploit WordPress 4.7.0/4.7.1 Username Enumeration - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress 4.7.0/4.7.1 Username Enumeration";
$urlue = "$targets/wp-json/wp/v2/users";
$curlue = curl_init();
curl_setopt($curlue, CURLOPT_URL, $urlue);
curl_setopt($curlue, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlue, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlue);
$httpCode = curl_getinfo($curlue, CURLINFO_HTTP_CODE);
curl_close($curlue);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress 4.7.0/4.7.1 Username Enumeration";
	echo "\n    > Tutorial : http://skamason.com/7J0E\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress 4.7.0/4.7.1 Username Enumeration - ShinChan - N45HT */

/* Exploit WordPress Gravity Form Arbitrary File Upload - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Gravity Form Arbitrary File Upload";
$urlgf = "$targets/index.php?gf_page=upload";
$curlgf = curl_init();
curl_setopt($curlgf, CURLOPT_URL, $urlgf);
curl_setopt($curlgf, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlgf, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlgf);
$httpCode = curl_getinfo($curlgf, CURLINFO_HTTP_CODE);
curl_close($curlgf);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Gravity Form Arbitrary File Upload";
	echo "\n    > Tutorial : http://skamason.com/7ItP\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Gravity Form Arbitrary File Upload - ShinChan - N45HT */

/* Exploit WordPress Plugin ACF Frontend Display 2.0.5 - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Plugin ACF Frontend Display 2.0.5";
$urlacffd = "$targets/wp-content/plugins/acf-frontend-display/js/blueimp-jQuery-File-Upload-d45deb1/server/php/index.php";
$curlacffd = curl_init();
curl_setopt($curlacffd, CURLOPT_URL, $urlacffd);
curl_setopt($curlacffd, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlacffd, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlacffd);
$httpCode = curl_getinfo($curlacffd, CURLINFO_HTTP_CODE);
curl_close($curlacffd);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Plugin ACF Frontend Display 2.0.5";
	echo "\n    > Tutorial : http://skamason.com/7IkS\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Plugin ACF Frontend Display 2.0.5 - ShinChan - N45HT */

/* Exploit Wordpress Infocus3 Theme Arbitrary File Download Vulnerability - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit Wordpress Infocus3 Theme Arbitrary File Download Vulnerability";
$urlifafd = "$targets/wp-content/themes/infocus3/lib/scripts/dl-skin.php";
$curlifafd = curl_init();
curl_setopt($curlifafd, CURLOPT_URL, $urlifafd);
curl_setopt($curlifafd, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlifafd, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlifafd);
$httpCode = curl_getinfo($curlifafd, CURLINFO_HTTP_CODE);
curl_close($curlifafd);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : Wordpress Infocus3 Theme Arbitrary File Download Vulnerability";
	echo "\n    > Tutorial : http://skamason.com/7Imr\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit Wordpress Infocus3 Theme Arbitrary File Download Vulnerability - ShinChan - N45HT */

/* Exploit WP Install Vulnerability - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WP Install Vulnerability";
$urlwpiv = "$targets/wp-admin/install.php";
$curlwpiv = curl_init();
curl_setopt($curlwpiv, CURLOPT_URL, $urlwpiv);
curl_setopt($curlwpiv, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlwpiv, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlwpiv);
$httpCode = curl_getinfo($curlwpiv, CURLINFO_HTTP_CODE);
curl_close($curlwpiv);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WP Install Vulnerability";
	echo "\n    > Tutorial : http://skamason.com/7Iri\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WP Install Vulnerability - ShinChan - N45HT */

/* Exploit WordPress Product Options For WooCommerce Plugin File Upload - ShinChan - N45HT */
echo "\n\n[+] Testing Exploit WordPress Product Options For WooCommerce Plugin File Upload";
$urlpofw = "$targets/wp-content/plugins/woocommerce-product-options/includes/image-upload.php";
$curlpofw = curl_init();
curl_setopt($curlpofw, CURLOPT_URL, $urlpofw);
curl_setopt($curlpofw, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curlpofw, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curlpofw);
$httpCode = curl_getinfo($curlpofw, CURLINFO_HTTP_CODE);
curl_close($curlpofw);
if($httpCode == 200){
	echo "\n    > Result : 200 ok";
	echo "\n    > Exploit : WordPress Product Options For WooCommerce Plugin File Upload";
	echo "\n    > Tutorial : http://skamason.com/7IxS\n";
	$totalvuln = $totalvuln + 1;
}else{
	echo "\n    > Result : 404";
	echo "\n    > Not Vulnerable";
	$totalnotvuln = $totalnotvuln + 1;
}
/* Exploit WordPress Product Options For WooCommerce Plugin File Upload - ShinChan - N45HT */

echo "\n\n [x] Result :";
echo "\n    [~] Total Vulnerability = $totalvuln";
echo "\n    [~] Total Not Vulnerability = $totalnotvuln\n\n";
?>