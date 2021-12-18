<?php
function useHeader($imagePath)
{
    return '
      <header>
        <nav class="nav flex toggler">
            <img src="' . $imagePath . '" class="nav__image" alt="">
            <ul class="nav__link flex toggler__expand">
                <li class="link"><a href="">Home</a></li>
                <li class="link"><a href="">Developer</a></li>
                <li class="link"><a href="">Projects</a></li>
            </ul>
        </nav>
    </header>
    ';
}
