<div class="header">
    <nav id="nav">
        <div class="nav-items">
            @if(!auth()->check())
                <a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z"/></svg>
                    <p>Home</p>
                </a>
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 160L480 160C497.7 160 512 174.3 512 192L512 448C512 465.7 497.7 480 480 480L416 480C398.3 480 384 494.3 384 512C384 529.7 398.3 544 416 544L480 544C533 544 576 501 576 448L576 192C576 139 533 96 480 96L416 96C398.3 96 384 110.3 384 128C384 145.7 398.3 160 416 160zM406.6 342.6C419.1 330.1 419.1 309.8 406.6 297.3L278.6 169.3C266.1 156.8 245.8 156.8 233.3 169.3C220.8 181.8 220.8 202.1 233.3 214.6L306.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L306.7 352L233.3 425.4C220.8 437.9 220.8 458.2 233.3 470.7C245.8 483.2 266.1 483.2 278.6 470.7L406.6 342.7z"/></svg>
                    <p>Sign In</p>
                </a>
                <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M136 192C136 125.7 189.7 72 256 72C322.3 72 376 125.7 376 192C376 258.3 322.3 312 256 312C189.7 312 136 258.3 136 192zM48 546.3C48 447.8 127.8 368 226.3 368L285.7 368C384.2 368 464 447.8 464 546.3C464 562.7 450.7 576 434.3 576L77.7 576C61.3 576 48 562.7 48 546.3zM544 160C557.3 160 568 170.7 568 184L568 232L616 232C629.3 232 640 242.7 640 256C640 269.3 629.3 280 616 280L568 280L568 328C568 341.3 557.3 352 544 352C530.7 352 520 341.3 520 328L520 280L472 280C458.7 280 448 269.3 448 256C448 242.7 458.7 232 472 232L520 232L520 184C520 170.7 530.7 160 544 160z"/></svg>
                    <p>Sign Up</p>
                </a>
            @else
                <a href="" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256.5 72C322.8 72 376.5 125.7 376.5 192C376.5 258.3 322.8 312 256.5 312C190.2 312 136.5 258.3 136.5 192C136.5 125.7 190.2 72 256.5 72zM226.7 368L286.1 368L287.6 368C274.7 394.8 279.8 426.2 299.1 447.5C278.9 469.8 274.3 503.3 289.7 530.9L312.2 571.3C313.1 572.9 314.1 574.5 315.1 576L78.1 576C61.7 576 48.4 562.7 48.4 546.3C48.4 447.8 128.2 368 226.7 368zM432.6 311.6C432.6 298.3 443.3 287.6 456.6 287.6L504.6 287.6C517.9 287.6 528.6 298.3 528.6 311.6L528.6 317.7C528.6 336.6 552.7 350.5 569.1 341.1L574.1 338.2C585.7 331.5 600.6 335.6 607.1 347.3L629.5 387.5C635.7 398.7 632.1 412.7 621.3 419.5L616.6 422.4C600.4 432.5 600.4 462.3 616.6 472.5L621.2 475.4C632 482.2 635.7 496.2 629.5 507.4L607 547.8C600.5 559.5 585.6 563.7 574 556.9L569.1 554C552.7 544.5 528.6 558.5 528.6 577.4L528.6 583.5C528.6 596.8 517.9 607.5 504.6 607.5L456.6 607.5C443.3 607.5 432.6 596.8 432.6 583.5L432.6 577.6C432.6 558.6 408.4 544.6 391.9 554.1L387.1 556.9C375.5 563.6 360.7 559.5 354.1 547.8L331.5 507.4C325.3 496.2 328.9 482.1 339.8 475.3L344.2 472.6C360.5 462.5 360.5 432.5 344.2 422.4L339.7 419.6C328.8 412.8 325.2 398.7 331.4 387.5L353.9 347.2C360.4 335.5 375.3 331.4 386.8 338.1L391.6 340.9C408.1 350.4 432.3 336.4 432.3 317.4L432.3 311.5zM532.5 447.8C532.5 419.1 509.2 395.8 480.5 395.8C451.8 395.8 428.5 419.1 428.5 447.8C428.5 476.5 451.8 499.8 480.5 499.8C509.2 499.8 532.5 476.5 532.5 447.8z"/></svg>
                    <p>User Settings</p>
                </a>
                <a href="" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 160C241.7 160 256 145.7 256 128C256 110.3 241.7 96 224 96L160 96C107 96 64 139 64 192L64 448C64 501 107 544 160 544L224 544C241.7 544 256 529.7 256 512C256 494.3 241.7 480 224 480L160 480C142.3 480 128 465.7 128 448L128 192C128 174.3 142.3 160 160 160L224 160zM566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L438.6 169.3C426.1 156.8 405.8 156.8 393.3 169.3C380.8 181.8 380.8 202.1 393.3 214.6L466.7 288L256 288C238.3 288 224 302.3 224 320C224 337.7 238.3 352 256 352L466.7 352L393.3 425.4C380.8 437.9 380.8 458.2 393.3 470.7C405.8 483.2 426.1 483.2 438.6 470.7L566.6 342.7z"/></svg>
                    <p>Sign Out</p>
                </a>
            @endif

            <a href="" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M144 224C161.7 224 176 238.3 176 256L176 512C176 529.7 161.7 544 144 544L96 544C78.3 544 64 529.7 64 512L64 256C64 238.3 78.3 224 96 224L144 224zM334.6 80C361.9 80 384 102.1 384 129.4L384 133.6C384 140.4 382.7 147.2 380.2 153.5L352 224L512 224C538.5 224 560 245.5 560 272C560 291.7 548.1 308.6 531.1 316C548.1 323.4 560 340.3 560 360C560 383.4 543.2 402.9 521 407.1C525.4 414.4 528 422.9 528 432C528 454.2 513 472.8 492.6 478.3C494.8 483.8 496 489.8 496 496C496 522.5 474.5 544 448 544L360.1 544C323.8 544 288.5 531.6 260.2 508.9L248 499.2C232.8 487.1 224 468.7 224 449.2L224 262.6C224 247.7 227.5 233 234.1 219.7L290.3 107.3C298.7 90.6 315.8 80 334.6 80z"/></svg>
                <p>Third</p>
            </a>
        </div>

    </nav>
    <div class="toggle" id="toggle">
        <svg id="nav-open" class="burger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
        <svg id="nav-close" class="close hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z"/></svg>
    </div>
</div>

@script
    <script>
        let burger = document.getElementById('nav-open');
        let close = document.getElementById('nav-close');
        let nav = document.getElementById('nav')

        document.getElementById('toggle').addEventListener('click', function () {
            close.classList.toggle('hidden');
            burger.classList.toggle('hidden');
            nav.classList.toggle('active');
        });
    </script>
@endscript
