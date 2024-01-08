<?php
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='modelSection'"));
$jsonData = json_decode($data['content'], true);
?>

<style>
    .model-img-popup{
        transition: all 0.5s;
    }
    .model-img-popup:hover{
        transform: scale(1.2)
    }
</style>

<div id="modal-container" style="z-index: 2000">
    <div class="modal-background">
        <div class="modal">
            <div class="" style="background-color: white;">
                <h3 class="text-black container" style="margin-bottom: 32px;">SMART INDIA HACKATHON ' 23 - NSCET Achievements</h3>

                <div class="marquee-content">
                    <?php
                    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='imgSection'"));
                    $jsonString = str_replace('\/', '/', $data['content']);
                    $urlArray = json_decode($jsonString, true);

                    foreach ($urlArray as $img) {
                        echo '<div class="marquee-item">';
                        echo '  <img class="model-img-popup" src="./admin/' . $img . '" alt="" />';
                        echo '</div>';
                        echo "\n";
                    }

                    foreach ($urlArray as $img) {
                        echo '<div class="marquee-item">';
                        echo '  <img class="model-img-popup" src="./admin/' . $img . '" alt="" />';
                        echo '</div>';
                        echo "\n";
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>