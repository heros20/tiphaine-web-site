<?php
/* Template Name: home  */

get_header();
?>
<div class="B">
    <h1>BIENVENUE</h1>
    <p>Sur les créations de Tiphaine</p>
</div>
<div class="bigflex">
    <div class="flexslider">
        <ul class="slides">
            <li>
            <img src="<?= get_template_directory_uri()?>/assets/image/meuble1.png" />
            </li>
            <li>
            <img src="<?= get_template_directory_uri()?>/assets/image/meuble2.jpg" />
            </li>
            <li>
            <img src="<?= get_template_directory_uri()?>/assets/image/meuble3.jfif" />
            </li>
            <li>
            <img src="<?= get_template_directory_uri()?>/assets/image/meuble4.jpg" />
            </li>
        </ul>
    </div>
</div>
<div class="big-doc">
    <div class="doc">
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
    </div>
    <div class="doc">
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
    </div>
    <div class="doc">
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
            <p>Lorem ipsum dolor sit amet consectetur adipis</p>
    </div>
</div>
<?php
get_footer();