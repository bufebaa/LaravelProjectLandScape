<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/form.css">
    <title>Form</title>
</head>
<body>
    <div class="main">
        <div class="form-wrapper">
            <div class="form">
            <h1 class="maintitle">Заповніть форму</h1>

            @if (Session::has('flash_message'))
                <div class="alert alert-success"> {{ Session::get('flash-message')}} </div>
            @endif
            <form action="{{route('contact-message')}}" method="post">
                      @csrf

                      <p class="form-info">
                        @if($errors->has('name'))
                        <small class="form-text">Введіть ім’я</small>
                        @endif
                        <input type="text" name="name" class="form-field" placeholder="Ім’я">
                        @if($errors->has('email'))
                        <small class="form-text">Введіть пошту</small>
                        @endif
                        <input type="text" name="email" class="form-field" placeholder="Пошта">
                        <textarea name="text" class="text-area" placeholder="Напишіть повідомлення!"></textarea>
                    </p>

                      <button type="submit" wrap="off" class="send-button" >Надіслати</button>
                      </form>

            </div>
    </div>
    </div>
</body>
</html>