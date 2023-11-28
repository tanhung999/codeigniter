<section id="feature">
              <div class="container">
                <div class="section-heading">
                  <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?= esc($title) ?></h1>
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
                            <?php if (! empty($categories) && is_array($categories)): ?>
                              <?php foreach ($categories as $category): ?>
                                <?php endforeach; ?>
                            <td><a target="_blank" href="category/<?= esc($category['category_name'], 'url') ?>"></a>Edit</td>
                        
                       
                        <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                  <h3>Not have data</h3>
                  <p> Nothing</p>
                <?php endif?>
               
                  
                </div>
              </div>
            </section>