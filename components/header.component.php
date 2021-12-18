<?php
function useHeader()
{
    return '
      <header>
        <nav class="nav flex toggler">
            <img src="../images/me.jpg" class="nav__image" alt="">
            <ul class="nav__link flex toggler__expand">
                <li class="link"><a href="../index.php">Home</a></li>
                <li class="link"><a href="./developer.php">About Developer</a></li>
                <li class="link"><a href="./projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    ';
}
