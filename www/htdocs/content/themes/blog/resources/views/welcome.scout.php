<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <?php wp_head(); ?>
</head>
<body>
<!-- <header>
    <h3>Pragmatic Prego</h3>
    <h5>A pragmatic approach to pregnancy</h5>
</header>
<hr class="divider" />
 -->
<section class="container">

    <section class="hero">
    </section>

    <section class="blog-description">
        <h1 class="blog-name">The <span class="highlight">Pragmatic</span> Preggo</h1>
        <div class="box">
           <h2>
                <i class="fa fa-quote-left" aria-hidden="true"></i> 
                Pratical education for expectant mothers
                <i class="fa fa-quote-right" aria-hidden="true"></i> 
           </h2>
        </div>
    </section>


    
    <section class="articles">
        <?php
        // var_dump($post);
            krsort($posts);
            foreach ($posts as $post):
        ?>
        <article>
            <aside class="titles">
                <h2 class="title"><?=$post->post_title;?></h2>
                <div class="subtitle">- written while <span class="highlight">thinking at night</span> (12/31)</div>
            </aside>
            <div class="content">
                <?php if (has_post_thumbnail($post)): ?>
                <div class="featured-image">
                    <?php echo get_the_post_thumbnail($post); ?>
                </div>
                <?php endif; ?>
                <p>
                <?php
                $str = wpautop($post->post_content);
                $str = substr($str, 0, strpos($str, '</p>') + 4 );
                echo strip_tags($str, '<a><strong><em>');
                ?>
                </p>
                <span class="more"><a href="<?php echo get_permalink($post); ?>" >...continue reading</a></span>
            </div>
        </article>

        <?php endforeach; ?>


    </section>

    <section class="information">
        <section class="author">
            <div class="image">
               <img src="<?= themosis_assets() . "/images/yaya.jpg"; ?>" border="0" /> 
            </div>    

            <div class="about">
                <p class="signature">Iael Nuchovich</p>
                <p><b>Painter</b>, <b>Expectant Mother</b>, <b>Cook</b>, <b>Writer</b></p>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>

    </section>
</section>
<?php wp_footer(); ?>
</body>
</html>