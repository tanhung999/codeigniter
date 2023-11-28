<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
        <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?= esc($title) ?></h1>
        <p class="wow fadeInDown" data-wow-delay=".5s">
            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
            Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
            lacus.
        </p>
        </div>
        <div class="row">
            <?php if (! empty($news) && is_array($news)): ?>

            <?php foreach ($news as $news_item): ?>
                
                    <div class="col-md-4 col-sm-6">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-1.jpg" class="img-fluid" alt="this is a title">
                            <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>
                                <a target="_blank" href="news/<?= esc($news_item['slug'], 'url') ?>">Details</a>
                            </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                            <a href="#">
                                <?= esc($news_item['title']) ?>
                            </a>
                            </h4>
                            <p>
                            <?= esc($news_item['body']) ?>
                            </p>
                        </figcaption>
                        </figure>
                    </div>
                
            <?php endforeach ?>
            <?php else: ?>
            <?php endif ?>
        </div>
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->