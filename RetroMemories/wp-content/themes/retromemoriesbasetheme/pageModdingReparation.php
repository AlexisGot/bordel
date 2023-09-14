<?php
/*
Template Name: ModdingReparation
*/
?>
<?php
get_header(null, ["styles"=>"pageRM"]);
?>
<main>
    <section class="contentPM">
        <div>
            <h1><?= get_field("title_principale_rm") ?></h1>
            <p class="blueColor"><?= get_field("parag_principale_rm") ?></p>
        </div>
        <section>
            <div class="blocPM">
                <img class="imgPM" src="<?= get_field("first_img_rm")["url"] ?>" alt="">
                <div class="paragPM">
                    <h2 class="blueColor"><?= get_field("first_title_rm") ?></h2>
                    <p class="blueColor"><?= get_field("first_parag_rm") ?></p>
                    <div class="consoleBtn">
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_1")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_2")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_3")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_4")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_5")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_6")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_7")["url"] ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="blocPM">
                <img class="imgPM" src="<?= get_field("second_img_rm")["url"] ?>" alt="">
                <div class="paragPM2">
                    <h2 class="white"><?= get_field("second_title_rm") ?></h2>
                    <p class="white"><?= get_field("second_parag_rm") ?></p>
                    <div class="consoleBtn">
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_1")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_2")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_3")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_4")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_5")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_6")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_7")["url"] ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="blocPM">
                <img class="imgPM" src="<?= get_field("third_img_rm")["url"] ?>" alt="">
                <div class="paragPM">
                    <h2 class="blueColor"><?= get_field("third_title_rm") ?></h2>
                    <p class="blueColor"><?= get_field("third_parag_rm") ?></p>
                    <div class="consoleBtn">
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_1")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_2")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_3")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_4")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_5")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_6")["url"] ?>" alt=""></a>
                        <a href="" target="_blank" title=""><img class="imgConsoleBtn" src="<?= get_field("console_7")["url"] ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<?php
get_footer()
?>