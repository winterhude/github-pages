<!-- News Section -->
<div id="news">
  <div class="container">
    <div class="section-title text-center center">
      <h2>NEWS</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <?php if ($lang == 'ja' || $lang == 'vip'): ?>
              <li><a href="#" data-filter="*" class="active">すべて</a></li>
              <li><a href="#" data-filter=".develop">開発情報</a></li>
              <li><a href="#" data-filter=".event">イベント</a></li>
              <li><a href="#" data-filter=".other">その他</a></li>
            <?php else: ?>
              <li><a href="#" data-filter="*" class="active">ALL</a></li>
              <li><a href="#" data-filter=".develop">DEVELOPING INFO</a></li>
              <li><a href="#" data-filter=".event">EVENTS</a></li>
              <li><a href="#" data-filter=".other">OTHERS</a></li>
            <?php endif; ?>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="news-items">
        <?php foreach ($news_list as $news) { ?>
          <div class="col-sm-6 col-md-3 col-lg-3 <?php echo $news[2]; ?>">
            <div class="news-item">
              <div class="hover-bg">
                <a href="<?php echo $news[4]; ?>" target="_blank">
                  <div class="hover-text">
                    <h4><?php echo $news[0]; ?></h4>
                    <small><?php echo $news[1]; ?></small>
                  </div>
                  <div class="news-image">
                    <img src="<?php echo URL; ?>/img/news/<?php echo $news[3]; ?>" alt="<?php echo strip_tags($news[0]); ?>">
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
