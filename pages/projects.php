<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/products.style.css">

</head>

<body>
    <?php
    include "../components/header.component.php";
    echo useHeader();
    ?>

    <main>
    <section class="block block--projects flex flex__column f__center">
            <div class="wrapper">
                <div class="block__header">
                    <h1 class="block__heading">Project Collection</h1>
                </div>  
                <div class="block__content flex cards f__center">
                    
                    <?php
                        require_once "../backend/config.php";
                        $sql = "SELECT * FROM projects";

                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_array($result)){
                                    echo 
                                    "<a class=\"card\" href=". $row['url'] ." target=\"_blank\">
                                        <img src=../". $row['path'] ." alt=\"\" class=\"card__img\">

                                        <footer class=\"card__footer\">
                                            <h1 class=\"card__title\">". ucwords($row['name']) ."</h1>
                                            <p class=\"card__date\">". $row['datePublished'] ."</p>
                                        </footer>
                                    </a>";
                                }

                                mysqli_free_result($result);
                            }
                        }
                        else{
                            echo "<div style=\"background-color: black; color: white; font-weight: bold;\">
                                    ERROR: Could not able to execute $sql. " . mysqli_error($link) . "
                                </div> " ;
                        }
                    ?>

                </div>
            </div>
           
        </section>
    </main>

    <?php
    include "../components/footer.component.php";
    include "../components/aside.component.php";
    echo useFooter();
    echo useAside();

    ?>
    <script src="https://kit.fontawesome.com/5516339156.js" crossorigin="anonymous"></script>

</body>
    
</html>