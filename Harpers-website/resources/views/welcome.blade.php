<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
    @vite(['public/scss/styles.scss', 'public/script/script.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="center">
    <img class="logo" src="{{ asset('images/logo.png') }}">
</div>

<div x-data="{ isOpen: window.innerWidth > 992, isTablet: window.innerWidth <= 992 }" x-init="() => { isOpen = window.innerWidth > 992; window.addEventListener('resize', () => { isOpen = window.innerWidth > 992; if (isOpen) { document.body.style.overflow = 'auto'; document.querySelector('.navbar').style.position = 'unset'; document.querySelector('.navbar_menu').style.justifyContent='flex-end';} else {document.querySelector('.navbar').style.position = 'fixed'; document.querySelector('.navbar').style.top = '0'; } }); window.addEventListener('DOMContentLoaded', () => { isOpen = window.innerWidth > 992; if (isOpen) { document.body.style.overflow = 'auto'; document.querySelector('.navbar').style.position = 'unset'; document.querySelector('.navbar_menu').style.justifyContent='flex-end';} else {document.querySelector('.navbar').style.position = 'fixed'; document.querySelector('.navbar').style.top = '0'; } }); }" class="navbar" style="justify-content:end">



  <div class="navbar_menu" :class="{ 'd-none': !isOpen }" id="navbar_menu">
    <button @click="isOpen = false; document.body.style.overflow='auto'" class="navbar_close"><i class="fa-solid fa-x"></i></button>
    <div class="x-center"><img class="navbar_logo" src="images/logo.png"></div>
    <a @click.prevent="$scrollTo('#moda')" href="#moda">Moda<p class="arrow-button">></p></a>
    <a @click.prevent="$scrollTo('#lifestyle')" href="#lifestyle">Lifestyle<p class="arrow-button">></p></a>
    <a @click.prevent="$scrollTo('#guzellik')" href="#guzellik">Güzellik<p class="arrow-button">></p></a>
    <a @click.prevent="$scrollTo('#celebrity')" href="#celebrity">Celebrity<p class="arrow-button">></p></a>
    <a @click.prevent="$scrollTo('#bride')" href="#bride">Bride<p class="arrow-button">></p></a>
    <a @click.prevent="$scrollTo('#video')" href="#video">Video<p class="arrow-button">></p></a>
    <a href="https://xd.adobe.com/outgoing?url=https%3A%2F%2Fturkuvazreklam.com.tr%2Fyayin%2Fdergiler%2Fharpers-bazaar">Abone Ol</a>
    <a href="https://xd.adobe.com/outgoing?url=https%3A%2F%2Fturkuvazreklam.com.tr%2Fyayin%2Fdergiler%2Fharpers-bazaar">E-Bülten</a>
  </div>
  <div class="y-center">
    <button @click="isOpen = !isOpen; document.body.style.overflow = isOpen ? 'hidden' : 'auto' " class="navbar_bars" id="navbar_bars" :class="{ 'd-none': isOpen }"><i class="fa fa-bars"></i></button>
  </div>
</div>
<div class="imgad">
    @include('AdBanner')
</div>
    <div class="center">
            <img class="taylor-swift" src="{{ asset('images/taylor-swift.png') }}">
            </div>
            <div class="x-center">
            <p class="taylor-text">Beyoncé, Taylor Swift’in ‘Eras Tour’ Film Galasına Katıldı</p>
    </div>   
<div class="black-container">
    <div>
        <div class="center">
            <h3 class="hl-header">GÜNDEM</h3>
        </div>
    <div class="grid-container">
        <div>
            <img class="highlights" src="{{ asset('images/highlights-1.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Paris Moda Haftası’nda Öne Çıkanlar</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-2.png') }}">
            <p class="category-header">GÜZELLİK</p>
            <p class="hl-subheader">Metalik Tonlar Geri Dönüyor</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-5.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Milano Moda Haftası, ilklere ev sahipliği …</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-6.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Murat Aytulum, 2024 İlkbahar / Yaz …</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-3.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Hazar Ergüçlü Sizi “Elle Wonderland”e Davet…</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-4.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Tasarımcıların Gözünden Modada Sürdürülebilirlik</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-7.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Yasemin Kay Allen, Jimmy Key ile Işıldıyor</p>
        </div>
        <div>
            <img class="highlights" src="{{ asset('images/highlights-8.png') }}">
            <p class="category-header">MODA</p>
            <p class="hl-subheader">Max Mara Teddy Bear Coat 10 Yaşında</p>
        </div>
    </div>
    </div>
</div>

    <div id="moda" class="container">
    <div class="row gx-2 justify-content-center">
    <div class="center">
            <h3 class="moda-header" >MODA</h3>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            <div>
                <img class="chemena" src="{{ asset('images/highlights-7.png') }}">
                <p class="moda-content">Yasemin Kay Allen, Jimmy Key ile Işıldıyor</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            <div>
                <img class="chemena" src="{{ asset('images/ChemenaKaman.png') }}">
                <p class="moda-content">Chloé’nin Yeni Kreatif Direktörü Chemena Kamali ile tanışın</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            <div>
                <img class="chemena" src="{{ asset('images/fashion.png') }}">
                <p class="moda-content">Tasarımcıların Gözünden Modada Sürdürülebilirlik ve Dijital…</p>
            </div>
        </div>
    </div>
</div>

<div id="lifestyle" class="black-container">
    <div>
        <div class="center">
            <h3 class="hl-header" >LIFESTYLE</h3>
        </div>
        <div class="center">
            <div class="lifestyle-container">
                <div class="grid-content">
                    <div>
                        <img class="coffee" src="{{ asset('images/coffee.png') }}">
                        <p class="coffee-header">E-ticaret müşterileri'nin tercihi kahve</p>
                        <p class="coffee-content">Türkiye’nin öncü e-ticaret platformu n11, 1 Ekim Dünya Kahve Günü’nün ardından n11 kullanıcılarının çay ve kahve tercihlerini açıkladı.</p>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/Jisbar.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">Ünlü Pop-Art sanatçısı Jisbar Kalyon Kültür’de</p>
                        <p class="lifestyle-content">Pop-Art sanatının çağdaş temsilcisi Jisbar, “Jisbar İstanbul’da” isimli sergisiyle İstanbul’a geliyor.</p>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/hw-smile.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">Hollywood İlhamlı Gülüş Tasarımı</p>
                        <p class="lifestyle-content">Türkiye’ye yabancı hasta getiren diş kliniği Dentakay’ın kurucularından Dr. Gülay Akay ile</p>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/m-gallery.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">‘M Gallery Heritage Days’ Etkinliği Ünlü İsimlerin</p>
                        <p class="lifestyle-content">The Artisan İstanbul M Gallery Hotel, şehrin en önemli sanat etkinliklerinden olan Contemporar</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="imgad">
    @include('AdBanner')
</div>
<div id="guzellik" class="container">
    <div>
        <div class="center">
            <h3 class="moda-header">GÜZELLİK</h3>
        </div>
    <div class="beauty-container x-center">
        <div class="x-center">
        <div class="hl-positioning ">
            <img class="highlights" src="{{ asset('images/routine-img.png') }}">
            <p class="beauty-content">Routine+ Şık Bir Davet ile Tanıtıldı</p>
        </div>
        </div>
        <div class="x-center">
        <div class="hl-positioning">
            <img class="highlights" src="{{ asset('images/novage.png') }}">
            <p class="beauty-content">Yeni Novage+, Yeni Siz</p>
        </div>
        </div>
        <div class="x-center">
        <div class="hl-positioning">
            <img class="highlights" src="{{ asset('images/kate.png') }}">
            <p class="beauty-content">Kate Middleton’ın Curtain Bangs Stili</p>
        </div>
        </div>
        <div class="x-center">
        <div class="hl-positioning">
            <img class="highlights" src="{{ asset('images/spa.png') }}">
            <p class="beauty-content">The Spa at Mandarin Oriental Bosphorus,</p>
        </div>
        </div>
    </div>
</div>
</div>
<div class="imgad">
    @include('AdBanner')
</div>
    <div id="lifestyle" class="black-container">
    <div>
        <div class="center">
            <h3 class="hl-header" >CELEBRITY</h3>
        </div>
        <div class="center">
            <div class="lifestyle-container">
                <div class="grid-content">
                    <div>
                        <img class="coffee" src="{{ asset('images/selena.png') }}">
                        <p class="coffee-header">MTV Video Müzik Ödülleri’nin Kırmızı Halı Görünümleri</p>
                        <p class="coffee-content">Yılın merakla beklenen 2023 MTV Video Müzik Ödülleri törenine katılım gösteren yıldızlar, kırmızı halıda en iyi görünümlerini sergiledi.</p>
                  </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/joe-sophie.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">Joe Jonas ve Sophie Turner Boşanıyor</p>
                        <p class="lifestyle-content">Evlilikleri “geri dönülemez” bir yola girdi.</p>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/lady-gaga.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">Yeni Gösteriye Hazırlık Başladı</p>
                        <p class="lifestyle-content">Lady Gaga, eski Hollywood efsanelerini yaşatıyor.</p>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="lifestyle-img">
                        <img class="jisbar" src="{{ asset('images/venice.png') }}">
                    </div>
                    <div>
                        <p class="lifestyle-text">Venedik Film Festivali’nin En İyi Görünümleri</p>
                        <p class="lifestyle-content">Göz alıcı etkinliğin en unutulmaz 20 kırmızı halı görünümünü derledik.</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="bride">
    <div>
    <div class="center">
            <h3 class="moda-header" >BRIDE</h3>
        </div>
        <div class="bride-container">
            <div class="bride-section">
        <div class="bride-center">
            <div>
                <img class="bride-img" src="{{ asset('images/bride1.png') }}">
                <p class="bride-content">2022’nin En Ünlü 10 Gelinlik Modeli</p>
            </div>
        </div>
        <div class="bride-center">
            <div>
                <img class="bride-position bride-img" src="{{ asset('images/bride3.png') }}">
                <p class="bride-content">En Özel Gününüzü “Joy” ile Kutlayın</p>
            </div>
        </div>
        </div>
        <div class="second-bride-section">
        <div class="d-flex justify-content-center">
            <div>
                <img class="bride-img" src="{{ asset('images/bride2.png') }}">
                <p class="bride-content">Vera Wang: Yeni Bir Düğün Çağındayız</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                <img class="bride-img" src="{{ asset('images/bride4.png') }}">
                <p class="bride-content">Gelin İlhamı: Jennifer Lopez’in Düğün Saç ve Makyajı</p>
            </div>
        </div>
        </div>
        <div class="bride-ad">
        <div x-data="{ imageSize: window.innerWidth <= 992 ? 'small' : 'large' }" x-init="() => { 
    window.addEventListener('resize', () => {
      imageSize = window.innerWidth <= 992 ? 'small' : 'large';
    });
  }">
    <img class="bride-ad" :src="imageSize === 'small' ? 'images/300x250.png' : 'images/300x600.png'" alt="Resim">
</div>
        </div>
        
</div>
</div>
</div>

<div id="video" class="container">
<div class="center">
            <h3 class="moda-header" >HARPER’S BAZAAR TV</h3>
        </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 center">
            <a class="video-link" href="https://xd.adobe.com/outgoing?url=https%3A%2F%2Fturkuvazreklam.com.tr%2Fyayin%2Fdergiler%2Fharpers-bazaar">
            <img class="video" src="{{ asset('images/harpers-icon.png') }}">
            <i class="fa-solid fa-play"></i>
            </a>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            <p class="video-text">2023 Harper’s Bazaar İkonları</p>
        </div>
        </div>
    </div>
</div>
</div>

<div class="footer">
<div class="footer_section">
            <div class="center">
            <div class="f-w">
                <img class="footer-logo" src="{{ asset('images/footer-logo.png') }}">
            </div>
            </div>
            <div class="center">
            <div class="f-w">
                <p class="follow-us">BİZİ TAKİP EDİN</p>
            </div>
            </div>
            <div class="center">
            <div class="f-w">
            <div class="icon-section">
                <div class="icons">
                    <img  src="{{ asset('images/youtube.svg') }}">
                </div>
                <div class="icons">
                    <img src="{{ asset('images/facebook.svg') }}">
                </div>
                <div class="icons">
                    <img src="{{ asset('images/instagram.svg') }}">
                </div>
                <div class="icons">
                    <img src="{{ asset('images/twitter.svg') }}">
                </div>
             </div>
             </div>
             </div>
    </div>
        <div class="footer_section" x-data="{ isMenuOpen: window.innerWidth > 992}" x-init="window.addEventListener('resize', () => { isMenuOpen = window.innerWidth > 992})">
            <div class="center">
                <button class="footer-menu" @click="isMenuOpen = !isMenuOpen; toggleMenu()">KATEGORİLER <i class="fa-solid" :class="{ 'fa-chevron-down': !isMenuOpen, 'fa-chevron-up': isMenuOpen }"></i></button>
            </div>
            <div class="x-center">
            <div id="footer-a" class="footer-categories" x-show="isMenuOpen" ref="categoryMenu" x-ref="categoryMenuRef">
                <p class="footer-category">MODA</p>
                <p class="footer-category">LIFESTYLE</p>
                <p class="footer-category">GÜZELLİK</p>
                <p class="footer-category">BRIDE</p>
                <p class="footer-category">CELEBRITY</p>
                <p id="menuEnd" class="footer-category">ASTROLOJİ</p>
            </div>
            </div>
        </div>
    <div class="footer_section" x-data="{ isMenuOpen2: window.innerWidth > 992, isMenuOpen3: window.innerWidth > 992 }" x-init="window.addEventListener('resize', () => { isMenuOpen2 = window.innerWidth > 992; isMenuOpen3 = window.innerWidth > 992 })">
        <div class="center">
            <button class="footer-menu2" @click="isMenuOpen2 = !isMenuOpen2; isMenuOpen3 = !isMenuOpen3; toggleMenu2()">KURUMSAL <i class="fa-solid" :class="{ 'fa-chevron-down': !isMenuOpen2, 'fa-chevron-up': isMenuOpen2 }"></i></button>
        </div>
        <div class="footer-grid">
            <div class="x-center">
            <div class="footer-categories center" x-show="isMenuOpen2 || isMenuOpen3" ref="corporateMenu" x-ref="corporateMenuRef">
                <p class="footer-category">VIDEO</p>
                <p class="footer-category">MÜCEVHER</p>
                <p class="footer-category">SANAT</p>
                <p class="footer-category">DAVETLER</p>
                <p class="footer-category">AT WORK</p>
                <p class="footer-category">SON SAYI</p>
            </div>
            </div>
            <div class="x-center">
            <div class="footer-categories" x-show="isMenuOpen3">
                <p class="footer-category">ABONE OL</p>
                <p class="footer-category">KÜNYE</p>
                <p class="footer-category">REKLAM</p>
                <p class="footer-category">GİZLİLİK</p>
                <p class="footer-category">VERİ POLİTİKASI</p>
                <p id="menuEnd2" class="footer-category">RSS</p>
            </div>
            </div>
        </div>
    </div>
</div>

<script defer src="https://unpkg.com/alpinejs-scroll-to@latest/dist/scroll-to.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>