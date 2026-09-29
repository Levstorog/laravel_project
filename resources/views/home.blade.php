<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <header>
        <a href="{{ route('home') }}" class="logo">MySite</a>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>

    <main>
        <h1 class="text-center">Добро пожаловать на наш сайт!</h1>
        
        <div class="card">
            <p>это я</p>
            <img src="{{ Vite::asset('resources/views/images/one.jpg') }}" alt="">
            
            <p class="w-[520px] ppp">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, saepe reiciendis debitis quidem molestiae mollitia molestias delectus accusamus provident ipsam inventore, odit, voluptates libero ratione suscipit similique in tempora distinctio?
            </p>
        </div>
        </main>

    <footer>
        <p>&copy;</p>
        <p>Сторожилов Лев Алексеевич П-45 29.09.2026</p>    
    </footer>

</body>
</html>
