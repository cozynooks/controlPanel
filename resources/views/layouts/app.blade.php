<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header class="Header">
            <div class="Header__logo">
                <h1>PRODUCT ADMIN</h1>
            </div>
        </header>
        <div class="Container">
            <aside class="Side">
                <h2>Products</h2>
                <div class="List">
                    <div class="List__item">
                        <div class="List__itemImg">
                            <img src="/images/60x60.png" alt="">
                        </div>
                        <div class="List__itemInfo">
                            <p class="List__itemCode">999-xxxxxx-1234</p>
                            <p class="List__itemName">Tシャツ</p>
                            <p>\1,000</p>
                        </div>
                    </div>

                    <div class="List__item">
                        <div class="List__itemImg">
                            <img src="/images/60x60.png" alt="">
                        </div>
                        <div class="List__itemInfo">
                            <p class="List__itemCode">999-xxxxxx-1234</p>
                            <p class="List__itemName">Tシャツ</p>
                            <p>\1,000</p>
                        </div>
                    </div>

                </div>
            </aside>
            <main class="Main">
                test
            </main>
        </div>
        @yield('content')
    </body>
</html>
