<!--
    Pujado, Christian Paul A
    BSCS
    C2TLA#3
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Paul Pujado</title>
    <link rel="stylesheet" href="css/style.css">
<body>
    <header>
        <nav class="nav flex flex__between">
            <img src="images/me.jpg" class="nav__image" alt="">
            <span class="icon position__fixed"><i class="fas fa-ellipsis-h"></i></span>
        </nav>
    </header>
    <main>
        <section class="block flex flex__column f__center">
            <h1 class="block__heading">Hi, I'm Chris</h1>
            <p class="block__subheading">A Software Engineer</p>
        </section>

        <section class="block block--projects flex flex__column f__center">            
            <div>
                <div class="block__header">
                    <h1 class="block__heading">Featured Projects</h1>
                </div>
                <div class="block__content flex">
                
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
        </section>

        <section class="block block--profile flex flex__column f__center">
            <div class="codespace">
                <header class="codespace__header"></header>
                <div class="codespace__content">
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getFullName()
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            "Christian Paul Pujado"
                        </p>
                    </section>
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getBirthDate(format(<span class="codespace--string">"DD MMM YYYY"</span>))
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            16 Feb 2001
                        </p>
                    </section>
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getLocation()
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            "Zone 2 #080 Lerma Naga City, Province of Camarines Sur"
                        </p>
                    </section>
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getEducation()
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            "Bachelor of Science In Computer Science At University Of Nueva Caceres"
                        </p>
                    </section>
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getInterest()
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            {"Coding", "Watching Anime", "Playing Leagues"}
                        </p>
                    </section>
                    <section class="codespace__block">
                        <h2 class="codespace__block--code">
                            <span class="codespace--highlight">person</span>.getPreferLanguages(Order.DSC)
                            <span class="codespace__caret">
                                <i class="fas fa-caret-left"></i>
                            </span>
                        </h2>
                        <p class="codespace__block--output">
                            {"Java", "Python", "JS" , "C++", "C#", "C"}
                        </p>
                    </section>
                </div>
            </div>
        </section>

        
    </main>
    <aside class="contacts">
        <a class="icon contacts__icon">
            <i class="fab fa-facebook"></i>
        </a>
        <a class="icon contacts__icon">
            <i class="fab fa-github"></i>
        </a>
        <a class="icon contacts__icon">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a class="icon contacts__icon">
            <i class="fas fa-at"></i>
        </a>
    </aside>
    <footer>

    </footer>
    <script src="https://kit.fontawesome.com/5516339156.js" crossorigin="anonymous"></script>
</body>
</html>