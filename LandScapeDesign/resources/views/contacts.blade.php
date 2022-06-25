<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/contacts.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
              <div class="content_wrapper">
                <div class="header_logo">
                  <a href="/" class="header_logo_link">
                    <img src="/img/svg/logo.svg" alt="logo" class="header_logo_pic">
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
                        <div class="main-title">Контакти</div>
                        <div class="line"></div>
                        <div class="subtitle">Наша команда завжди рада допомогти нашим клієнтам втілити
                             їх мрії у реальність. Ми завжди на зв’язку з нашими клієнтами і 
                             гoтові відповісти на усі запитання.</div>
                    </div>
                    </div>
                </div>

                <div class="content-wrapper">
                <div class="contact-information">

                    <div class="contact_text">
                      <h1 class="contact_title">Дзвоніть нам у будь-який день неділі з 10:00 до 19:00</h1>
                      <p class="contact_subtitle">Наші консультанти завжди допоможуть вам з 
                        вибором правильного спеціалісту та  з цікавими вам питаннями.</p>
                      <div class="wparrer_for_icon">
                        <img src="/img/svg/call-us-icon.svg" alt="">
                        <p class="icon-info">+38 675 4567</p>
                      </div>
                    </div>

                    <div class="contact_text">
                      <h1 class="contact_title">Наш офіс працює з 9:00 до 19:00 ПН-ПТ</h1>
                      <p class="contact_subtitle">Ми завжди раді бачити наших клієнтів в нашому офісі. 
                        Тут можно подивитись усі роботи наших спеціалістів та обрати команду 
                        з якою б вам було комфортно створювати сад вашої мрії.</p>
                      <div class="wparrer_for_icon">
                        <img src="/img/svg/location-icon.svg" alt="">
                        <p class="icon-info">м.Київ вул.ЛЛЛЛЛЛЛЛ 76г</p>
                      </div>
                    </div>

                    <div class="contact_text">
                      <h1 class="contact_title">Пишіть нам на пошту цілодобово</h1>
                      <p class="contact_subtitle">Якщо у вас є питання або пропозиції щодо роботи 
                        нашої компанії, наш консультант вам відповість на пошту.</p>
                      <div class="wparrer_for_icon">
                        <img src="/img/svg/email-icon.svg" alt="">
                        <p class="icon-info">Plantsecret2002@gmail.com</p>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="anketa">
                  <div class="anketa_back">

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
        <script src="main.js"></script>
        <script src="../js/app.js"></script>

</body>
</html>