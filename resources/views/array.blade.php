<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
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

        <div class="links">
            <a href="{{ route('array.mixing') }}"  class="btn">Перемешать</a>
            <a href="{{ route('array.sorting') }}" class="btn">Сортировать по цене</a>
            <a href="{{ route('array.filtr') }}"   class="btn">Только дороже 1000 ₽</a>
        </div>
        <div class="products-grid">
            @foreach($array as $item)
            <div class="product-card">
                <img src="{{ Vite::asset('resources/views/images/' . $item['path']) }}" alt="{{ $item['title'] }}">
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['price'] }} ₽</p>
            </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>&copy;</p>
        <p>Сторожилов Лев Алексеевич П-45 29.09.2026</p>    
    </footer>
</body>
</html>