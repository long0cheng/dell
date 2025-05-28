<!DOCTYPE html>
<!-- saved from url=(0032)https://globalapi.smart2pay.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head runat="server"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <title>WeChat QR code</title>
    <script type="text/javascript" src="./WeChat QR code_files/ruxitagentjs_ICANVfghqrtux_10313250422105919.js" data-dtconfig="rid=RID_2418|rpid=409090377|domain=smart2pay.com|reportUrl=/rb_bf35075wpw|app=34e28418534d4c91|cuc=7p4cvkzo|mel=100000|featureHash=ICANVfghqrtux|dpvc=1|md=mdcc1=dpaymenttoken|lastModification=1747652533542|tp=500,50,0|rdnt=1|uxrgce=1|tal=3|agentUri=/ruxitagentjs_ICANVfghqrtux_10313250422105919.js"></script><link rel="shortcut icon" href="https://globalapi.smart2pay.com/Content/images/Methods/WeChat/wechat.ico" type="image/x-icon">
    <style>
        /*! normalize.css v4.2.0 | MIT License | github.com/necolas/normalize.css */button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}
        /* CLEARFIX */ .clearfix:after {visibility: hidden;display: block;content: "";clear: both;height: 0;}* html .clearfix { zoom: 1; } /* IE6 */*:first-child+html .clearfix { zoom: 1; } /* IE7 */
    </style>
    <style>
        *{box-sizing:border-box}body{font-family:"Segoe UI",Helvetica,"Helvetica Neue LT Std",Tahoma,Geneva,Verdana,Arial,sans-serif;font-size:.85em;color:#444;background-color:#F0F0F0}.hideOverflow{overflow:hidden}.showOverflow{overflow:visible}a,a:link,a:visited{color:#08a806;text-decoration:none;padding:0 .1em;transition: all .15s ease-in-out;}a:hover,a:link:hover{background-color:#08a806;color:#FFF}#WeChatForm{width:23em;margin:3.5em auto}.form_container{background-color:#FFF;border:.1em solid #CCC;border-radius:1em;padding:2em;box-shadow:0 3px 0 rgba(0,0,0,.1);position:relative}.wechat_logo_container{position:relative;top:-1em;text-align:center;padding-bottom:.5em}.wechat_logo_container>img{height:2.5em}.lang-en .logo_zh,.lang-zh .logo_en{display:none!important}.lang_selector_container{position:absolute;right:1.2em;top:-1.5em}.form_group{display:block;margin-bottom:1em}.form_group .label{float:left;min-width:7.6em;color:#777;text-align:right;word-break:break-all}.form_group .label:after{content:":";display:block;margin:0 .5em;color:#AAA;float:right}.form_group .value{margin-left:7.1em;color:#222;text-overflow:ellipsis;word-break:break-all}.form_group .value.amount{font-weight:700}#qr_code{margin-top:1.5em;padding:1em;border:1px dotted #DDD}#QRCodeImageControl > img{width:100%;height:100%;max-width:16.8em;max-height:16.8em}#return_url{padding-top:1em;text-align:center;display:none}#linkRedirectToMerchant{display:block;font-size:1.15em;padding:.5em .5em .8em 1em;-webkit-border-radius:.6em;border-radius:.6em;background-color:#EEE;border:1px solid #08a806}#linkRedirectToMerchant:hover{background-color:#08a806}#back_arrow{width:1em;height:1em;fill:#08a806;position:relative;top:.3em}#linkRedirectToMerchant:hover #back_arrow{fill:#FFF;border-color:#08a806}.helper_link_container{position:absolute;left:0;bottom:-1.5em;text-align:center;width:100%}#helper_overlay{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAD0lEQVR42mJiYGAwBggwAABCADbJ7p4FAAAAAElFTkSuQmCC);position:fixed;top:0;left:0;width:100%;height:100%;overflow:auto;text-align:center}.helper_img{padding:2em 1em 1.2em 2em;background-color:#F0F0F0;border:.2em solid #AAA;width:25em;max-height:39em;margin:5% auto 0;border-radius:1.5em;position:relative}.lang-en .helper_img>.lang-zh,.lang-zh .helper_img>.lang-en{display:none}#helper_overlay img{max-height:35.5em!important;max-width:100%!important}#close_icon_container{position:absolute;right:-1.2em;top:-1.2em;cursor:pointer;background:#F0F0F0;padding:8px;padding-bottom:5px;border-radius: 5.5rem;}#close_icon path{fill:#777;transition: fill .15s ease-in-out;}#close_icon:hover path{fill:#0aba06}.lang-zh .form_group .label{min-width:4.6em}.lang-zh .form_group .value{margin-left:5em}@media (min-width:30.9375em){body{font-size:.95em}}@media (min-width:37.5em){body{font-size:1.15em}#helper_link>span,#linkRedirectToMerchant>span,.lang_selector_container{font-size:.8em!important}}
    </style>
</head>
<body class="lang-zh">
    <form id="WeChatForm" runat="server">

        <div class="wechat_logo_container">
            <img class="logo_en" src="./WeChat QR code_files/helper_small_en">
            <img class="logo_zh" src="./WeChat QR code_files/helper_small_zh">
        </div>

        <div class="form_container">

            <div class="lang_selector_container">
                <a href="javascript:void(0)" id="lang-zh">中文</a> | <a href="javascript:void(0)" id="lang-en">EN</a>
            </div>

            <div class="form_group clearfix">
                <div class="label">
                    <span id="lblAmount" data-lang-en="Warm tips" data-lang-zh="温馨提示">温馨提示</span>
                </div>
                <div class="value amount">
                    <span id="lblAmountValue" data-lang-en="Please scan the QR code in WeChat" data-lang-zh="请在微信中扫描二维码">请在微信中扫描二维码</span>
                </div>
            </div>

            <div id="qr_code">
                <div id="QRCodeImageControl">
                    <img src="./WeChat QR code_files/20250529070847.png">
                </div>
            </div>

            <div id="return_url" style="display: block;">
                <a id="linkRedirectToMerchant" href="https://www.dell.com/zh-cn">
                    <svg version="1.1" id="back_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.737 476.737" style="enable-background:new 0 0 476.737 476.737;" xml:space="preserve">
                    <g>
                    <path d="M341.31,74.135c-0.078-4.985-2.163-9.911-5.688-13.438l-55-55C277.023,2.096,271.963,0,266.872,0
                                    s-10.151,2.096-13.75,5.697L69.841,188.978c-3.601,3.599-5.697,8.659-5.697,13.75s2.096,10.151,5.697,13.75l183.281,183.281
                                    c3.599,3.601,8.659,5.697,13.75,5.697s10.151-2.096,13.75-5.697l55-55c3.591-3.598,5.681-8.651,5.681-13.734
                                    s-2.09-10.136-5.681-13.734L221.06,202.728L335.622,88.166C339.287,84.499,341.387,79.318,341.31,74.135L341.31,74.135z"></path>



                        </g>
                    </svg>

                    <span data-lang-zh="返回商户" data-lang-en="Return to merchant">返回商户</span>
                </a>
            </div>

        </div>

        <input type="hidden" id="WeChatAddress" runat="server">
    </form>

    <div id="helper_overlay" style="display: none">
        <div class="helper_img">
            <div id="close_icon_container" title="Close">
                <svg version="1.1" id="close_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30" height="30" viewBox="0 0 438.533 438.533" xml:space="preserve">
                <g>
                <path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                        c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                        c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                        s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                        C438.533,179.485,428.732,142.795,409.133,109.203z M322.621,270.939c3.617,3.613,5.428,7.905,5.428,12.854
                        c0,5.133-1.811,9.514-5.428,13.127l-25.693,25.701c-3.614,3.613-7.994,5.42-13.135,5.42c-4.948,0-9.236-1.807-12.847-5.42
                        l-51.676-51.682l-51.678,51.682c-3.616,3.613-7.898,5.42-12.847,5.42c-5.14,0-9.517-1.807-13.134-5.42l-25.697-25.701
                        c-3.616-3.613-5.424-7.994-5.424-13.127c0-4.948,1.809-9.24,5.424-12.854l51.678-51.673l-51.678-51.678
                        c-3.616-3.612-5.424-7.898-5.424-12.847c0-5.14,1.809-9.517,5.424-13.134l25.697-25.693c3.617-3.616,7.994-5.424,13.134-5.424
                        c4.949,0,9.231,1.809,12.847,5.424l51.678,51.674l51.676-51.674c3.61-3.616,7.898-5.424,12.847-5.424
                        c5.141,0,9.521,1.809,13.135,5.424l25.693,25.693c3.617,3.617,5.428,7.994,5.428,13.134c0,4.948-1.811,9.235-5.428,12.847
                        l-51.675,51.678L322.621,270.939z"></path>

                </g>
                </svg>
            </div>
            <img src="./WeChat QR code_files/helper_small_zh.png" class="lang-zh">
            <img src="./WeChat QR code_files/helper_small_en.png" class="lang-en">
        </div>
    </div>

    <script type="text/javascript">
        var langs = [document.getElementById('lang-zh'), document.getElementById('lang-en')], body = document.getElementsByTagName("BODY")[0], toTranslate = document.getElementsByTagName("SPAN"); langs.forEach(function (langSwitch) { var currentLang; langSwitch.onclick = function () { currentLang = (this.id).replace('lang-', ''); body.className = 'lang-' + currentLang; for (var i = 0; i < toTranslate.length; i++) { if (toTranslate[i].getAttribute('data-lang-' + currentLang)) { toTranslate[i].innerHTML = toTranslate[i].getAttribute('data-lang-' + currentLang); } } } }); var helperSwitch = document.getElementById("helper_link"), helperContainer = document.getElementById("helper_overlay"), closeHelper = document.getElementById("close_icon_container"), returnURL = document.getElementById("return_url"); helperSwitch.onclick = function () { if (helperContainer.style.display === 'none') { helperContainer.style.display = 'block'; } }; document.onkeydown = function (evt) {
            evt = evt || window.event; var isEscape = false; if ("key" in evt) { isEscape = (evt.key == "Escape" || evt.key == "Esc"); }
            else { isEscape = (evt.keyCode == 27); } if (isEscape && helperContainer.style.display === 'block') { helperContainer.style.display = 'none'; }
        }; closeHelper.onclick = function () { helperContainer.style.display = 'none'; }; setTimeout(function () { returnURL.style.display = "block"; }, 15000);
    </script>

</body></html>