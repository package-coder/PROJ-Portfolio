<?php
function useHeader()
{
    return '
      <header class="position-sticky">
        <nav class="nav flex toggler">
            <ul class="nav__link flex toggler__expand">
                <li class="link"><a href="../index.php">Home</a></li>
                <li class="link"><a href="./developer.php">About Developer</a></li>
                <li class="link"><a href="./projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    ';
}
