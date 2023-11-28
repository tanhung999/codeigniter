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