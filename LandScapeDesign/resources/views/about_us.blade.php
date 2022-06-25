<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/about_us.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
              <div class="content_wrapper">
                <div class="header_logo">
                  <a href="/" class="header_logo_link">
                    <img src="img/svg/logo.svg" alt="logo" class="header_logo_pic">
                  </a>
                </div>
                
                <nav class="header_nav">
                  <ul class="header_list">
                    <li class="header_item">
                      <a href="/" class="header_link">Головна</a>
                    </li>
                    <li class="header_item">
                      <a href="/portfolio" class="header_link">Портфоліо</a>
                    </li>
                    <li class="header_item">
                      <a href="/contacts" class="header_link">Контакти</a>
                    </li>
                    <li class="header_item">
                      <a href="/about_us" class="header_link">Про нас</a>
                    </li>
                  </ul>  
                  <div class="header_nav_close">
                    <span class="header_nav_close_line"></span>
                   <span class="header_nav_close_line"></span>
                  </div>

                  </nav>

                  <div class="burger_menu burger">         
                  <span class="burger_line burger_line_1"></span>
                  <span class="burger_line burger_line_2"></span>
                  <span class="burger_line burger_line_3"></span>
                </div>
              </div>
        </header>
        
        <main class="main">
            <div class="background-wrapper">
                <div class="intro">
                    <div class="content_wrapper_info">
                        <div class="text">
                        <div class="main-title">Про нас</div>
                        <div class="line"></div>
                        <div class="subtitle">Наша студія займається різними видами ланшафтного 
                            дизайну. В нашій команді велика кількість професіоналів,
                             ми раді розказати  трошки про нашу студію.</div>
                    </div>
                    </div>
                </div>

                <div class="our_professionals">
                    <div class="professionals_intro">
                        <div class="content-wrapper">
                        <div class="professionals_title">Наші професіонали</div>
                    </div></div>


                    <div class="wrapper_for_cards">
                        <div class="card">
                            <img src="/img/png/yuriy.png" alt="">
                            <div class="card_text">
                                <h2 class="name">Юрій</h2>
                            <p class="professional-subtitle">
                                Спеціаліст з квітів
                            </p>
                            <p class="prof-info-about">
                                Юрій працює в нашій компанії з початку її існування і є
                                 незамінною одиницею нашої команди. Він займається
                                 вибором квітів та консультує клієнтів щодо догляду за нимии
                            </p>
                            </div>

                        </div>

                        <div class="card2">
                            <div class="card_text">
                                <h2 class="name">Поліна</h2>
                            <p class="professional-subtitle">
                                Ландшафтний дизайнер
                            </p>
                            <p class="prof-info-about">
                                Поліна має великий досвід у ланшафтному дизайні. 
                                Понад 10 років працювала за кордом де створювала дизайни неймовірної красоти.
                                 Майстер своєї справи та приємна людина.
                            </p>
                            </div>
                            <img src="./img/png/polina.png" alt="">

                        </div>

                        <div class="card">
                            <img src="/img/png/png.png" alt="">
                            <div class="card_text">
                                <h2 class="name">Максим</h2>
                            <p class="professional-subtitle">
                                Керівник
                            </p>
                            <p class="prof-info-about">
                                Максим займається ландшафтним дизайном понад 10 років. 
                                Саме він контролює щоб все було
                                 зроблено вчастно та задовілняло потреби наших клієнтів.
                            </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="what_we_offer">{
                    <div class="professionals_intro">
                        <div class="content-wrapper">
                        <div class="professionals_title">Що ми пропонуємо</div>
                    </div></div>

                    <div class="wrapper-for-things">
                        <div class="grid-for-things">
                            <div class="things-info">
                                <img src="/img/svg/what-1.svg" alt="">
                                <p class="thing-subtitle">
                                    створення озеленення на території
                                </p>
                            </div>
        
                            <div class="things-info">
                                <img src="/img/svg/what-2.svg" alt="">
                                <p class="thing-subtitle">
                                    розробка ландшафтного дизайну
                                </p>
                            </div>
        
                            <div class="things-info">
                                <img src="/img/svg/what-3.svg" alt="">
                                <p class="thing-subtitle">
                                    встановлення автоматичного поливу
                                </p>
                            </div>
        
                            <div class="things-info">
                                <img src="/img/svg/what-4.svg" alt="">
                                <p class="thing-subtitle">
                                    обслуговування території цілорічно
                                </p>
                            </div>
        
                        </div>
                    </div>
                </div>

                <div class="anketa">
                <form action="{{route('contact-form')}}" method="post">
                @csrf

                      <div class="content-wrapper">
                        <div class="anketa-text">Заповніть анкету і наш менеджер вам зателефонує</div>

                        @if($errors->any())
                        <h1 class="error">Заповніть будь ласка всі поля</h1>
                      @endif

                      @if(Session::has('success'))
                        <h1 class="success">Анкета відправлена</h1>
                      @endif

                        <p class="form-info">
                          <input type="text" name="name" class="form-field" placeholder="Ім’я">
                          <input type="text" name="phone" class="form-field" placeholder="Номер телефону">
                      </p>
                      </div>
  
                      <div class="content-wrapper">
                      <button type="submit" class="send-button">Надіслати</button>
                        </div>
                </form>
  
                  </div>
                </div>
        </main>

        <footer class="footer">
            <div class="content_wrapper_intro">
                <div class="footer-picture">
                <img src="/img/svg/footer-logo.svg" class ="footer-pic" alt="">
            </div>
        </div>
  
            <div class="wrapper-for-footer">
                <div class="footer-content">
                    <div class="footer-item">
                        <div class="icon-image">
                        <img src="/img/svg/footer-icon-location.svg" class="footer-icon" alt="">
                    </div>
                        <div class="footer-text">
                            <h3 class="footer-title">Адресса</h3>
                            <p class="footer-subtitle">вул. А б. 6</p>
                        </div>
                    </div>
  
                    <div class="footer-item">
                        <div class="icon-image">
                        <img src="/img/svg/call-us-icon.svg" class="footer-icon" alt="">
                    </div>
                        <div class="footer-text">
                            <h3 class="footer-title">Телефон</h3>
                            <p class="footer-subtitle">+38 675 4567</p>
                        </div>
                    </div>
  
                    <div class="footer-item">
                        <div class="icon-image">                       
                        <img src="/img/svg/email-icon.svg" class="footer-icon" alt="">
                        </div>
                        <div class="footer-text">
                            <h3 class="footer-title">Пошта</h3>
                            <p class="footer-subtitle">Plantsecret2002@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
        <script src="../js/app.js"></script>

</body>
</html>