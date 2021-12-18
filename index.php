
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Paul Pujado</title>
    <link rel="stylesheet" href="css/style.css">
    
<body>
    <header class="position-sticky">
        <nav class="nav flex toggler">
            <img src="images/me.jpg" class="nav__image" alt="">
            <ul class="nav__link flex toggler__expand">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="pages/developer.php">About Developer</a></li>
                <li class="link"><a href="pages/projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="block block--home flex flex__column f__center">
            <h1 class="block__heading">Hi, I'm Chris</h1>
            <p class="block__subheading">A Software Engineer</p>
        </section>

        <section class="block block--projects flex flex__column f__center">
            <div>
            <div class="block__header">
                <h1 class="block__heading">Featured Projects</h1>
            </div>  
            <div class="block__content flex cards f__center">
            
                <a class="card">
                    <img src="" alt="" class="card__img">

                    <footer class="card__footer">
                        <h1 class="card__title">Title</h1>
                        <p class="card__date">11/11/11</p>
                    </footer>
                </a>
                <a class="card">
                    <img src="" alt="" class="card__img">

                    <footer class="card__footer">
                        <h1 class="card__title">Title</h1>
                        <p class="card__date">11/11/11</p>
                    </footer>
                </a>
                <a class="card">
                    <img src="" alt="" class="card__img">

                    <footer class="card__footer">
                        <h1 class="card__title">Title</h1>
                        <p class="card__date">11/11/11</p>
                    </footer>
                </a>
            </div>
            </div>
            <footer class="block__footer">
                <a href="pages/projects.php" class="link">View All</a>
            </footer>
        </section>

        <section class="block block--profile">
            <div class="wrapper flex f__center">
                <span class="image-wrapper">
                    <img src="images/me.jpg" alt="image of christian paul pujado" class="image">
                </span>
                <div>
                    <div class="block__header">
                        <h1 class="block__heading">About Developer</h1>
                    </div>  
                    <p class="block__content">
                    I am Chris and I am a Software Engineer, I specialize in computations and logic. I am the type of a programmer who constantly seeks out innovative solutions to everyday problems.  I have a passion for processes, and my 3 years of doing this have nurtured and enhanced my  analytical and collaboration skills, and I would love to be part and work with a team.  I know I still have enough room for improvement and I am very much willing to work on that.
                    </p>
                    <div class="block__footer"><a href="pages/developer.php" class="link"><strong>Read More</strong></a></div>
                </div>
            </div>
        </section>


    </main>
    
    <?php
    
    include "components/footer.component.php";
    include "components/aside.component.php";
    
    echo useAside();
    echo useFooter();
    ?>

    <script src="https://kit.fontawesome.com/5516339156.js" crossorigin="anonymous"></script>
</body>

</html>