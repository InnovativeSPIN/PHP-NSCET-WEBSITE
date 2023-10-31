<?php
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `homepage` WHERE `sectionName`='modelSection'"));
$jsonData = json_decode($data['content'], true);
?>

<div id="modal-container" style="z-index: 2000">
    <div class="modal-background">
        <div class="modal">
            <h2><?php echo $jsonData['title']?></h2>
            <p>
                <?php echo $jsonData['content']?>
            </p>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
            </svg>
        </div>
    </div>
</div>