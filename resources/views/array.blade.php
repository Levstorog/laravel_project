<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="products-grid">
    @foreach($array as $item)
        <!-- Отдельная карточка товара -->
        <div class="product-card">
            <img src="{{ Vite::asset('resources/views/images/' . $item['path']) }}" alt="{{ $item['title'] }}">
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['price'] }} &#8381;</p>
        </div>
    @endforeach
</div>
</body>
</html>