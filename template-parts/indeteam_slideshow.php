<!-- Slideshow container -->
<div class="slideshow-container">


    <?php
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        if (trim(get_theme_mod('upload_setting' . $i)) != '' && trim(get_theme_mod('description_setting' . $i)) != '') {
            $arr[] = $i;
        }
    }

    $size = count($arr);

    for ($i = 0; $i < $size; $i++) {
        buildSlides($size, $i + 1, get_theme_mod('upload_setting' . $arr[$i]), get_theme_mod('description_setting' . $arr[$i]));
    }
    ?>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<!-- The dots/circles -->
<div style="text-align:center" class="_dot">
    <?php buildDots($size) ?>
</div>
<br>

<?php
function buildSlides($size, $index, $img_url, $caption)
{
    // Full-width images with number and caption text
    echo '<div class="mySlides fade">
        <div class="numbertext">' . $index . ' / ' . $size . '</div>
        <img src="' . $img_url . '"
             style="width:100% height:300px">
        <div class="text">' . $caption . '</div>
    </div>';
}

function buildDots($size)
{
    for ($i = 1; $i <= $size; $i++)
        echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
}

?>