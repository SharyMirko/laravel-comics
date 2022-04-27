<footer>
    <div class="footer-content">
        <div class="container">
            <ul class="footer-ul">
                <li class="footer-li">
                    <img src="./images/buy-comics-digital-comics.png" alt="digital comics"><a href="#">digital
                        comics</a>
                </li>
                <li class="footer-li">
                    <img src="./images/buy-comics-subscriptions.png" alt="mercahandise"><a href="#">dc mercahandise</a>
                </li>
                <li class="footer-li">
                    <img src="./images/buy-comics-merchandise.png" alt="subscription"><a href="#">subscription</a>
                </li>
                <li class="footer-li">
                    <img class="lol" src="./images/buy-comics-shop-locator.png" alt="comic shop locator"><a
                        href="#">comic shop locator</a>
                </li>
                <li class="footer-li">
                    <img src="./images/buy-dc-power-visa.svg" alt="dc power visa"><a href="#">dc power visa</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-content-jambo">
        <div class="container footer-container">
            <div class="footer-nav">
                <ul>
                    <li class="footer-nav-li">
                        <h3>Comics</h3>
                    </li>
                    @foreach ($footer['comic'] as $item)
                        <li class="footer-nav-li"><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li class="footer-nav-li">
                        <h3>Shop</h3>
                    </li>
                    @foreach ($footer['shop'] as $item)
                        <li class="footer-nav-li"><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach

                </ul>
                <ul>
                    <li class="footer-nav-li">
                        <h3>Dc</h3>
                    </li>
                    @foreach ($footer['dc'] as $item)
                        <li class="footer-nav-li"><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li class="footer-nav-li">
                        <h3>Sites</h3>
                    </li>
                    @foreach ($footer['sites'] as $item)
                        <li class="footer-nav-li"><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-logo"><img src="./images/dc-logo-bg.png" alt=""></div>
        </div>
    </div>
</footer>
