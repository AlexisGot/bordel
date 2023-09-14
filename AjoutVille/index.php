<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suisse</title>
    <meta name="description" content="Projet sur la Suisse et ses villes">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<header>
    <nav class="navbar">
        <img src="./suisse.png" alt="Image du drapeau de la Suisse" id="icone">
        <ul class="navbar-menu">
            <li><a href="#" class="liste">Spécialité</a></li>
            <li><a href="#" class="liste">Tourisme</a></li>
            <li><a href="#" class="liste">Sport</a></li>
            <li><a href="#" class="liste">Histoire</a></li>
            <li><a href="#" class="liste">Culture</a></li>
            <li><a href="#" class="liste">Economie</a></li>
        </ul>
    </nav>
</header>
   <main>
        <h2>Quels sont les villes ou aller en Suisse ?</h2>

        <?php 
             
             $conn = new PDO(
                'mysql:host=localhost;dbname=pays;charset=utf8','root',''
            );

            if(!empty($conn)){

                $req = "SELECT * FROM suisse";

                $exec = $conn->query($req);

                if($exec != false){

                    $results = $exec->FetchAll(PDO::FETCH_ASSOC);

                    foreach($results as $tuple){
                       
                        $img = $tuple["img"];
                        $descr = $tuple["descv"];
                        $ville = $tuple["ville"];
                        ?>
                            <div class="card">
                            <form action="./scriptdelete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tuple["id"];?>">
                            <div><button type="submit">Suprimer l'article</button></div>
                            </form>
                            <img src=<?php echo "$img";?> alt="illustration de <?php echo "$descr";?>">
                            <p class="info"><?php echo "$ville";?></p>
                            <p class="product"><?php echo "$descr";?></p>
                            </div>
    </main>
        <?php
                    
                }
                }
                else{
                    echo "Une erreur est servenue";
                }
            }
            else{
                echo "Erreur à la base de données";
            }
          ?>
<footer class="footer">
    <h6 class="footer__title">Me Contacter</h6>
    <div class="footer__container">
        <div class="footer__top">
            <div class="footer_sociaux">
                <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="https://www.facebook.com/profile.php?id=100076604238517" target="_blank"><img src="scr/img/facebook.png" title="facebook" alt="logo facebook cliquable" class="icone"></a>
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="https://www.instagram.com/eiko_v_vincent/" target="_blank"><img src="scr/img/instagram.png" title="instagram" alt="logo instagram cliquable" class="icone"></a>
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="https://www.youtube.com/channel/UCxKMaA_Q7hh46OzBWAOjWBA" target="_blank"><img src="scr/img/youtube.png" title="youtube" alt="logo youtube cliquable" class="icone"></a>
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="https://twitter.com/elonmusk" target="_blank"><img src="scr/img/twitter.png" title="twitter" alt="logo twitter cliquable" class="icone"></a>
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="https://www.linkedin.com/in/vincent-verhaeghe-8a5784221/" target="_blank"><img src="scr/img/linkedin.png" title="linkedin" alt="logo linkedin cliquable" class="icone"></a>
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="https://github.com/Eikoseijolo" target="_blank"><img src="scr/img/github.png" title="github" alt="logo github cliquable" class="icone"></a>
                                </a>
                            </li>
                </ul>
            </div>
        </div>

        <hr class="footer__divider">

        <div class="footer__bottom">
            <span class="copyright">&copy; 2023 Projet réalisé par Alexis, Vincent et Valentin. All rights reserved.</span>
            
        </div>
    </div>
</footer>
</body>
</html>