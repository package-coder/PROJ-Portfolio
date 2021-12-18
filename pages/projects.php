<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php
    include "../components/header.component.php";
    echo useHeader();
    ?>

    <main>
        <section class="block block--projects flex flex__column f__center">
            <div>
                <div class="block__header">
                    <h1 class="block__heading">Featured Projects</h1>
                </div>
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
        </section>
    </main>

    <?php
    include "../components/footer.component.php";
    echo useFooter();
    ?>
</body>

</html>