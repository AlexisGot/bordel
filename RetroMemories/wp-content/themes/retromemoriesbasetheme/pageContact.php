<?php
/*
Template Name: Contact
*/
?>
<?php
get_header(null, ["styles"=>"pageContact"])
?>
<main>
    <div id="allCC">
    <div>
        <h1><?= get_field("title_principale_contact") ?></h1>
        <p><?= get_field("parag_principale_contact") ?></p>
    </div>
    <div>
        <h2>Formulaire De Contact</h2>
        <div id="formulaireContact">
            <div class="blueTest">
                <?=the_content()?>
            </div>
            <div class="informationContact">
                <div class="content">
                    <h3>Coordonnées</h3>
                    <div class="contact">
                        <img src="<?= get_field("mail_img")["url"] ?>" alt="Illustration d'une enveloppe">
                        <a href="" target="_blank" title="Envoyer un email à Retro Memories"><?= get_field("mail_enterprise") ?></a>
                    </div>
                    <div class="contact">
                        <img src="<?= get_field("phone_img")["url"] ?>" alt="Illustration d'un téléphone">
                        <a href="" target="_blank" title="Téléphoner à Retro"><?= get_field("phone_number") ?></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Horaires d'ouverture</h3>
                    <div>
                        <p>Lundi : 9h00 - 19h00</p>
                    </div>
                    <div>
                        <p>Mardi : 9h00 - 19h00</p>
                    </div>
                    <div>
                        <p>Mercredi : Fermé</p>
                    </div>
                    <div>
                        <p>Jeudi : 9h00 - 19h00</p>
                    </div>
                    <div>
                        <p>Vendredi : 9h00 - 19h00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<?php
get_footer()
?>