<footer>

<?php if(!empty($_COOKIE["rgpd"]) && $_COOKIE["rgpd"] === "accepted"){
    echo "Les cookies ont étaient accepté";
    }
    else{?>

<div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum animi accusantium nisi nulla assumenda dignissimos numquam libero, quia nobis minima deserunt voluptatibus reiciendis fugit sunt, molestiae necessitatibus culpa. Error, illo.
    Modi, amet iusto! Distinctio neque unde id est ipsa eligendi. Similique atque iusto voluptas assumenda consequatur asperiores adipisci maxime, quos, eos, cupiditate magni velit perferendis expedita. Sit nesciunt facere molestiae!
    Nulla ut numquam voluptatem harum velit maxime! Maxime animi reiciendis omnis soluta, rerum architecto voluptas quia tempora consequuntur asperiores cupiditate sapiente qui quod sunt nihil! Deserunt delectus magnam repudiandae aliquam!
    Pariatur non reprehenderit unde labore adipisci. Repellendus illo ab aperiam non officia quod, nihil, aspernatur atque beatae eaque, at ipsum distinctio fuga dicta veniam est provident tenetur et laudantium consectetur.
    Eum nobis cumque perferendis odio dignissimos exercitationem adipisci similique, eaque quia vitae animi. Itaque iusto, excepturi, nobis sit non consectetur illo molestias ipsam corrupti sapiente doloribus error adipisci eligendi ipsum.</p>
    <form action="../../actions/cookies.php" method="GET">
    <button type="submit">Accepter les cookies</button>
    </form>
</div>
<?php }?>

        <p>Yohann MOY - TP Amazoone pour mes stagiaires de Soissons</p>
</footer>