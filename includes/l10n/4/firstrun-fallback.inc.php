<?php

$logolink  = '/img/firefox/3.6/firstrun/logo.png';
$logo      = '<h2><img src="'.$logolink.'" alt="Firefox Logo" id="title-logo" /><img src="/img/l10n/fx4-wordmark2.png" alt="Firefox Logo" id="title-wordmark" /></h2>';
$aboutlink = 'href="/'.$lang.'/about/"';
$slogan    = 'foobar';

// old 3.6 variables, avoid throwing an error
$extraval1 = $extraval2 = $oop = $oop_class = '';

$css = file_get_contents($config['file_root'].'/style/l10n/fx4-fistrun-fallback.css');

$extra_headers = <<<EXTRA_HEADERS
    <style>
        {$css}
    </style>
EXTRA_HEADERS;

if ($textdir == 'rtl') {
    $extra_headers .= <<<EXTRA_HEADERS
    <style>
    /* RTL support */

    #main-content {
        background-image: -moz-linear-gradient(left center , #F7F7FF 402px, #FFFFFF 402px)
    }

    #intro, #sidebar {
        float: right;
    }

    #sidebar h2:first-child {
        padding: 0 20px;
    }

    #sidebar ul li a:before,
    #personalize ul li a:before {
        content: url("/img/mobile/m/nav-arrow.png");
        -moz-transform: translate(27px) rotate(180deg);
        -moz-transform-origin: center center;
        float:right;
        height:25px;

    }

    #sidebar ul.link li a,
    #personalize ul.link li a {
        background-image:none;
        padding: 10px 40px 0px 35px;
        display:block;
        height:30px;


    }

    #personalize {
        padding-top: 50px;
        float: right;
    }

    </style>
EXTRA_HEADERS;
}



$slogan = array(
'af'    => "Dankie dat jy Firefox gekies het! Om meer uit jou blaaier te kry, kom gerus meer te wete oor die <a>jongste kenmerke</a>.",
'ar'    => "شكرًا لاختيارك فَيَرفُكس! للاستفادة بأكبر قدر من متصفحك، اعرف المزيد عن <a>أحدث المزايا</a>.",
'ast'   => "¡Gracies por escoyer Firefox! Pa conseguir lo máximo del restolador, conoz más tocante a les <a>caberes carauterístiques</a>.",
'be'    => "Дзякуй за выбар Firefox! Каб карыстацца вашым азіральнікам больш вынікова, пазнаёмцеся з <a>апошнімі асаблівасцямі</a>.",
'bg'    => "Благодарим ви, че избрахте Firefox! За да използвате максимално вашия браузър, научете повече за <a>последните възможности</a>.",
'bn-BD' => "ফায়ারফক্স নির্বাচন করার জন্য ধন্যবাদ! আপনার ব্রাউজারের সর্বাধিক সুবিধা নেয়ার জন্য <a>সর্বশেষ বৈশিষ্ট্য</a> সম্পর্কে জানুন।",
'bn-IN' => "Firefox নির্বাচনের জন্য ধন্যবাদ! ব্রাউজারের <a>নতুন বৈশিষ্ট্যগুলি</a> সম্বন্ধে জেনে নিয়ে ব্রাউজারের সর্বোত্তম ব্যবহার করুন।",
'ca'    => "Gràcies per triar el Firefox! Per aconseguir el millor del vostre navegador, informeu-vos sobre les <a>darreres característiques</a>.",
'cs'    => "Děkujeme, že jste si vybrali Firefox! Abyste získali ze svého prohlížeče maximum, přečtěte sí více o <a>nejnovějších funkcích</a>.",
'cy'    => "Diolch am ddewis Firefox! I gael y mwyaf allan o'ch porwr, dysgwch fwy am y <a>nodweddion diweddaraf</a>.",
'da'    => "Tak fordi du valgte Firefox! For at få mest ud af din browser kan du læse mere om <a>nye funktioner</a>.",
'de'    => "Danke, dass Sie Firefox gewählt haben. Lernen Sie mehr über <a>die neusten Funktionen</a>, um Ihren Browser optimal nutzen zu können.",
'el'    => "Σας ευχαριστούμε που επιλέξατε τον Firefox! Για να εκμεταλλευτείτε πλήρως την εφαρμογή, διαβάστε περισσότερα για τις <a>νέες λειτουργίες</a>.",
'en-GB' => "Thanks for choosing Firefox! To get the most out of your browser, learn more about the <a>latest features</a>.",
'eo'    => "Dankon pro via elektado de Firefox! Por eltiri la maksimumon el via retesplorilo legu pli pri la <a>lastaj trajtoj</a>.",
'es-AR' => "¡Gracias por elegir Firefox! Para sacar el mayor provecho de su navegador, conozca más sobre las <a>últimas características</a>.",
'es-CL' => "¡Gracias por elegir Firefox! Conozca más sobre las <a>últimas características</a>  para aprovechar al máximo su navegador.",
'es-ES' => "¡Gracias por elegir Firefox! Para conseguir lo máximo de su navegador, conozca más sobre las <a>últimas características</a>.",
'es-MX' => "¡Gracias por elegir Firefox! Para sacar el máximo partido de tu navegador, puedes obtener más información acerca de las <a>funcionalidades más recientes</a>.",
'et'    => "Täname, et valisid Firefoxi! Brauserist parima võtmiseks tutvu <a>viimaste uuendustega</a>.",
'eu'    => "Eskerrik asko Firefox aukeratzeagatik! Nabigatzaileari zuku gehiena ateratzeko, ikus ezazu <a>azken ezaugarri</a>ek dakartena.",
'fa'    => "از انتخاب فایرفاکس متشکریم! برای بهترین استفاده از مرورگرتان، پیشنهاد می‌کنیم دربارهٔ <a>جدیدترین ویژگی‌های</a> آن بخوانید.",
'fi'    => "Kiitos, että valitsit Firefoxin! Saadaksesi kaiken irti selaimestasi, lue Firefoxin <a>uusista ominaisuuksista</a>.",
'fr'    => "Merci d'avoir choisi Firefox ! Pour profiter pleinement de votre navigateur, découvrez ses <a>dernières fonctionnalités</a>.",
'fy-NL' => "Tank dat jo keazen hawwe foar Firefox! Om it measte út jo browser te heljen, lês mear oer de <a>lêste funksjes</a>.",
'ga-IE' => "Go raibh maith agat as Firefox a roghnú!  Leis an tairbhe is mó a bhaint as do bhrabhsálaí, féach ar <a>na gnéithe is déanaí</a>.",
'gd'    => "Mòran taing airson Firefox a thaghadh! Ma tha thu airson am brabhsair agad a chur gu làn-fheum, faigh eòlas air na <a>feartan as ùire</a>.",
'gl'    => "¡Grazas por escoller Firefox! Para conseguir o máximo do seu navegador, obteña máis información sobre as <a>últimas características</a>.",
'gu-IN' => "Firefox પસંદ કરવા માટે તમારો આભાર! મોટાભાગે તમારે બ્રાઉઝરને મેળવવા માટે <a>તાજેતરનાં લક્ષણો</a> વિશે વધારે શીખો.",
'he'    => "תודה שבחרת ב־Firefox! כדי להוציא את המיטב מהדפדפן שלך, למד עוד על <a>התכונות החדשות</a>.",
'hi-IN' => "फ़ायरफ़ॉक्स चुनने के लिए आपका शुक्रिया! अपने ब्राउज़र का अधिक का अधिक फ़ायदा पाने के लिए, <a>नवीनतम सुविधाओं</a> के बारे में अधिक जानकारी लें.",
'hr'    => "Hvala što ste odabrali Firefox! Da biste izvukli najviše iz svojeg preglednika, informirajte se o <a>najnovijim mogućnostima</a>.",
'hu'    => "Köszönjük, hogy a Firefoxot választotta! A böngésző képességeinek lehető legjobb kihasználása érdekében ismerje meg az <a>újdonságokat</a>.",
'id'    => "Terima kasih telah memilih Firefox! Baca tentang <a>fitur terbarunya</a> dan maksimalkan pengunaannya.",
'is'    => "Þakka þér fyrir að velja Firefox! Til að nota vafrann á sem bestan hátt, geturðu fræðst meira um <a>nýjustu eiginleikana</a>.",
'it'    => "Grazie per aver scelto Firefox! Scopri le <a>nuove funzioni</a> per ottenere il massimo dal tuo browser.",
'ja'    => "Firefox をさらに活用したいときは、<a>使い方のヒント</a> をご覧ください。基本的なキーボードショートカットや主な機能をご説明します。",
'kk'    => "Firefox-ты таңдағаныңыз үшін рахмет! Браузерді толығырақ қолдану үшін, оның <a>мүмкіндіктерімен</a> танысыңыз.",
'kn'    => "ಫೈರ್ಫಾಕ್ಸನ್ನು ಆಯ್ಕೆ ಮಾಡಿಕೊಂಡಿದ್ದಕ್ಕೆ ಧನ್ಯವಾದಗಳು! ನಿಮ್ಮ ಜಾಲವೀಕ್ಷಕದಿಂದ ಹೆಚ್ಚಿನ ಉಪಯೋಗ ಪಡೆದುಕೊಳ್ಳಲು, <a>ಇತ್ತೀಚಿನ ಸವಲತ್ತುಗಳ</a>ನ್ನು ನೋಡಿ.",
'ko'    => "Firefox를 선택해 주셔서 감사합니다. 더 멋진 인터넷 여행을 위해 <a>주요 기능</a>을 살펴 보시기 바랍니다.",
'ku'    => "Spas ji ber ku te Firefox hilbijart! Ji bo gerokê çêtir bi kar bînî derbarê <a>taybetiyên dawî</a> de agahiyan bistîne.",
'lt'    => "Dėkojame, kad pasirinkote „Firefox“! Susipažinkite su šia naršykle iš arčiau – sužinokite apie <a>naujausias jos savybes</a>.",
'lv'    => "Paldies, ka izvēlējāties Firefox! Lai iegūtu vairāk no sava pārlūka, uzziniet vairāk par <a>jaunajām iespējām</a>.",
'mk'    => "Ви благодариме што го одбравте Firefox! За да извлечете најмногу од Вашиот прелистувач, дознајте повеќе за неговите <a>најнови можности</a>.",
'ml'    => "ഫയര്‍ഫോക്സ് ഉപയോഗിയ്ക്കുന്നതിനു് നന്ദി! ഈ ബ്രൌസര്‍ സംബന്ധിച്ചുള്ള കൂടുതല്‍ വിവരങ്ങള്‍ക്കായി, <a>ഏറ്റവും പുതിയ വിശേഷതകള്‍</a> കാണുക.",
'mr'    => "फायरफॉक्स नीवडल्याबद्दल धन्यवाद! ब्राउजरला आणखी सुरेख बनवण्यासाठी, <a>नुकतेच गुणविशेष</a> विषयी अधिक जाणून घ्या.",
'nb-NO' => "Takk for at du valgte Firefox! For å få mest mulig ut av nettleseren, les om de <a>nyeste funksjonene</a>.",
'nl'    => "Bedankt voor het kiezen van Firefox! Lees meer over de <a>nieuwste functies</a> om het meeste uit uw browser te halen.",
'nn-NO' => "Takk for at du valde Firefox! For å få mest mogleg ut av nettlesaren, les om dei <a>nyaste funksjonane</a>.",
'or'    => "Firefox କୁ ବାଛିଥିବାରୁ ଧନ୍ୟବାଦ! ଆପଣଙ୍କ ବ୍ରାଉଜରରୁଅଧିକ ତଥ୍ୟ ପାଇବା ପାଇଁ,  <a>latest features</a> ବିଷୟରେ ଅଧିକ ଜ୍ଞାନ ଆହରଣ କରନ୍ତୁ।",
'pa-IN' => "ਫਾਇਰਫਾਕਸ ਚੁਣਨ ਲਈ ਧੰਨਵਾਦ ਜੀ! ਆਪਣੇ ਬਰਾਊਜ਼ਰ ਦੀ ਢੁੱਕਵੇਂ ਢੰਗ ਨਾਲ ਵਰਤੋਂ ਕਰਨ ਵਾਸਤੇ <a>ਨਵੇਂ ਫੀਚਰਾਂ</a> ਬਾਰੇ ਜਾਣਕਾਰੀ ਲਵੋ।",
'pl'    => "Dziękujemy za wybranie Firefoksa! Aby jak najlepiej wykorzystać przeglądarkę, zapoznaj się z jej <a>najnowszymi możliwościami</a>.",
'pt-BR' => "Obrigado por escolher o Firefox! Para tirar o máximo proveito do seu navegador, saiba mais sobre os <a>novos recursos</a>.",
'pt-PT' => "Thanks for choosing Firefox! To get the most out of your browser, learn more about the <a>latest features</a>.",
'rm'    => "Grazia per tscherner Firefox! Guarda las <a>novas funcziunalitads</a> per pudair utilisar optimalmain tes navigatur.",
'ro'    => "Vă mulțumim că ați ales Firefox! Pentru a cunoaște mai multe despre navigatorul dumneavoastră, citiți despre <a>cele mai noi funcționalități</a>.",
'ru'    => "Спасибо, что выбрали Firefox! Чтобы использовать ваш браузер по максимуму, узнайте больше о его <a>новейших возможностях</a>.",
'si'    => "ෆයර්ෆොක්ස් තෝරාගැනීම පිළිබඳව ස්තුතියි! ඉන් උපරිමය ලබා ගැනීමට, <a>නවතම විශේෂාංග</a> පිළිබඳව දැනුවත්වන්න.",
'sk'    => "Ďakujeme, že ste si zvolili Firefox! Aby ste mohli prehliadač využívať naplno, pozrite si prehľad jeho <a>najnovších funkcií</a>.",
'sl'    => "Hvala, da ste izbrali Firefox! Da bi kar najbolje izkoristili vaš brskalnik, spoznajte <a>zadnje novosti</a>.",
'sq'    => "Faleminderit për zgjedhjen e Firefox-it! Për të përfituar maksimumin prej shfletuesit tuaj, njihuni më tej me <a>veçoritë më të reja</a>.",
'sr'    => "Хвала Вам што сте изабрали фајерфокс! Да бисте добили највише из вашег прегледача, сазнајте више о  <a>најновијим могућностима</a>.",
'sv-SE' => "Tack för att du valt Firefox! För att få ut det mesta av din webbläsare, läs mer om de <a>senaste funktionerna</a>.",
'ta'    => "Firefox-ஐ தேர்ந்தெடுத்ததற்கு நன்றி! உங்கள் உலாவியில் பெரும்பாலானவற்றைப் பெற, <a>சமீபத்திய அம்சங்களை</a> பார்க்கவும்.",
'ta-LK' => "Firefox ஐ தெரிவு செய்தமைக்கு நன்றி! உங்களுடைய உலாவியில் இல்லாததை பெறுவதற்கு <a>பிந்திய அம்சங்களைப்</a> பற்றி மேலும் அறிந்துகொள்ளுங்கள்.",
'te'    => "ఫైర్‌ఫాక్స్ యెంచుకొనినందులకు ధన్యవాదములు! మీ బ్రౌజర్‌నుండి మరింత లభ్యత పొందుటకు, <a>సరికొత్త విశేషణములు</a> గురించి తెలుసుకొనండి.",
'th'    => "ขอบคุณที่เลือกใช้ Firefox! เรียนรู้<a>ความสามารถใหม่ๆ</a> เพื่อใช้งานเบราว์เซอร์ของคุณให้ได้ประโยชน์สูงสุด",
'tr'    => "Firefox'u seçtiğiniz için teşekkürler! Tarayıcınızdan en üst düzeyde yararlanmak için <a>yeni özellikler</a> hakkında daha fazla bilgi alın.",
'uk'    => "Дякуємо що обрали Firefox! Щоб використати його сповна, дізнайтесь більше про <a>нові можливості</a>.",
'zh-CN' => "感谢您选择了 Firefox！为了更好的使用您的浏览器，了解更多有关 <a>最新功能</a>。",
'zh-TW' => "感謝您選擇使用 Firefox！<br />用最快的速度了解您的瀏覽器，看看 <a>最新功能</a>。",
);

if(array_key_exists($lang, $slogan)) {

    $finalslogan = strip_tags($slogan[$lang]);

    $needle = array('!', '！', '.');
    foreach ($needle as $var) {
        $endsentence = ($var == '.') ? '' : $var; // period doesn't look good in a title
        if(strpos($finalslogan, $var)) {
            $finalslogan = explode($var, $finalslogan);
            foreach ($finalslogan as $key => $parts) {
                $finalslogan[$key] = ltrim($parts);
            }

            $finalslogan[0] = '<em>'.$finalslogan[0].$endsentence.'</em><br/>';
            $finalslogan = implode('', $finalslogan);
            if($var == '.') $finalslogan .= '.';
            break;
        }
    }
} else {
    $finalslogan = $page_title;
}

$promobox = <<<PROMO
    <div id="action">
        <h2>{$finalslogan}</h2>
    </div>
    <div id="screenshot"><div id="shade"></div><a href="/{$lang}/firefox/features/"><img src="/img/l10n/diagram.png" /></a></div>
PROMO;

unset($css);

?>
