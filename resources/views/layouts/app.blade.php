<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>
    </head>
    <body>
        <header class="Header">
            <div class="Header__logo">
                <h1>PRODUCT ADMIN</h1>
            </div>
        </header>
        <div class="Container">
            <aside class="Side">
                <header class="Side__header">
                    <h2>Products</h2>
                    <a href="/new" class="Button -new"><i class="fas fa-plus"></i></a>
                </header>
                <div class="List">
                    @foreach ($products as $product)
                        <a href="/edit/{{ $product->id }}">
                            <div class="List__item">
                                <div class="List__itemImg">
                                    <img src="/images/60x60.png" alt="">
                                </div>
                                <div class="List__itemInfo">
                                    <p class="List__itemCode">{{ $product->code }}</p>
                                    <p class="List__itemName">{{ $product->name }}</p>
                                    <p class="List__itemPrice">\{{ $product->price }}円</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </aside>
            <main class="Main">
                @yield('content')
            </main>
        </div>
    </body>
</html>
