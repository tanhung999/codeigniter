

<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="block wow fadeInUp" data-wow-delay=".3s">

          <!-- Slider -->
          <section class="cd-intro">
            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
              <span>HI, MY NAME IS JONATHON &amp; I AM A</span><br>
              <span class="cd-words-wrapper">
                <b class="is-visible">DESIGNER</b>
                <b>DEVELOPER</b>
                <b>FATHER</b>
              </span>
            </h1>
          </section> <!-- cd-intro -->
          <!-- /.slider -->
          <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
            With 10 years experience, I've occupied many roles including digital design director,<br> web designer and
            developer. This site showcases some of my work.
          </h2>
          <a class="btn-lines dark light wow fadeInUp animated btn btn-default btn-green hvr-bounce-to-right"
            data-wow-delay=".9s" href="https://themefisher.com/" target="_blank">Download More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
          <h2>
            ABOUT ME
          </h2>
          <p>
            Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of
            Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only
            five centuries
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus
            impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
          </p>
        </div>

      </div>
      <div class="col-md-6 col-sm-6">
        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
          <img src="images/about/about.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section> <!-- /#about -->


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
<!-- /#feature -->

            <section id="feature">
              <div class="container">
                <div class="section-heading">
                  <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?= esc($titleCate) ?></h1>
                  <p class="wow fadeInDown" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora
                    commodi repellendus quod laborum.
                  </p>
                </div>
                <div class="row">
                  
                <?php if (! empty($categories) && is_array($categories)): ?>
                <table style="width:100%" border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= esc($category['category_name']) ?></td>
                            <td><?= esc($category['category_description']) ?></td>
                            <td><a target="_blank" href="category/<?= esc($category['category_name'], 'url') ?>"></a>Edit</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <h3>Not have data</h3>
                    <p>Nothing.</p>
                <?php endif; ?>
                  
                </div>
              </div>
            </section>
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <section id="feature">
              <div class="container">
                <div class="section-heading">
                  <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?= esc($titleProduct) ?></h1>
                  <p class="wow fadeInDown" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora
                    commodi repellendus quod laborum.
                  </p>
                </div>
                <div class="row">
                  
                <?php if (! empty($products) && is_array($products)): ?>
                <table style="width:100%" border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category Id</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= esc($product['product_name']) ?></td>
                            <td><?= esc($product['category_id']) ?></td>
                            <td><?= esc($product['product_quantity']) ?></td>
                            <td><?= esc($product['product_decscription']) ?></td>
                            <td><?= esc($product['product_detail']) ?></td>
                            <td><?= esc($product['product_price']) ?></td>
                            <td><?= esc($product['product_image']) ?></td>
                            <td><a target="_blank" href="category/<?= esc($category['category_name'], 'url') ?>"></a>Edit</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <h3>Not have data</h3>
                    <p>Nothing.</p>
                <?php endif; ?>
                  
                </div>
              </div>
            </section>
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>


