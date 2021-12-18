<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Developer</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/developer.style.css">

</head>

<body>
    <?php
    include "../components/header.component.php";
    echo useHeader();
    ?>

    <main>
        <section class="block block--profile block--about">
            <div class="wrapper flex f__center">
                <span class="image-wrapper">
                    <img src="../images/me.jpg" alt="image of christian paul pujado" class="image">
                </span>
                <div>
                    <div class="block__header">
                        <h1 class="block__heading">About Developer</h1>
                    </div>  
                    <p class="block__content">
                    I am <strong>Christian Paul Pujado</strong> and I am a Software Engineer, I specialize in computations and logic. I am the type of a programmer who constantly seeks out innovative solutions to everyday problems.  I have a passion for processes, and my 3 years of doing this have nurtured and enhanced my  analytical and collaboration skills, and I would love to be part and work with a team.  I know I still have enough room for improvement and I am very much willing to work on that.
                    </p>
                </div>
            </div>    
        </section>
       
        <section>
            <!--Tech Stack-->
        </section>

        <section class="block block--hobbies">
            <!--Away From KeyBoard-->
            <div class="wrapper flex flex__column f__center">
                <div class="block__header">
                    <h1 class="block__heading">Away From Keyboard</h1>
                </div>
                <div class="block__content flex f__center">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam accusamus dignissimos at, quidem temporibus magnam molestias architecto deserunt facilis, blanditiis accusantium? Soluta laboriosam nemo cupiditate pariatur praesentium, obcaecati architecto ea odit earum, iusto numquam cum deleniti accusantium, explicabo autem. Quaerat ea excepturi iure, error esse repellendus omnis ut voluptatem modi.</p>
                    <img src="../images/me.jpg" alt="">
                </div>
            </div>
        </section>

        <section>
            <!--Photos-->
        </section>
    </main>

    <?php
    include "../components/footer.component.php";
    include "../components/aside.component.php";
    echo useAside();
    echo useFooter();
    ?>
    <script src="https://kit.fontawesome.com/5516339156.js" crossorigin="anonymous"></script>

</body>

</html>