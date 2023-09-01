<?php /** * Template Name: Static Page Transit */ 
  get_header();

?>


<div class="content-wrapper oh">

  <!-- Page Title -->
  <section class="page-title text-center">
    <div class="container">
      <div class="page-title__holder">
        <h1 class="page-title__title">
          <?php wp_title(''); ?>
        </h1>
        <?php echo the_content(); ?>
        <p class="page-title__subtitle">
          
        </p>
      </div>
    </div>
  </section> <!-- end page title -->

  <!-- Benefits -->
  <section class="section-wrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="benefits box-shadow-large offset-top-171">
            <h3 class="benefits__title">LinkOne 통관대행 서비스는 다음과 같은 솔루션을 제공합니다</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul class="benefits__list">
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">무역관련 필요 서류 대행</span>
                  </li>
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">현지 온/오프라인 상점에 물품 등록</span>
                  </li>
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">미국 수출무역 관련 컨설팅</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="benefits__list">
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">수입물품 인증/등록</span>
                  </li>
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">물류비용 진단 및 물류 이동수단 컨설팅</span>
                  </li>
                  <li class="benefits__item">
                    <i class="ui-check benefits__item-icon"></i>
                    <span class="benefits__item-title">물류 현지 보관, 쉬핑, 반품처리</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>            
      </div>
    </div>
  </section> <!-- end benefits -->

  <!-- Statistic -->
  <section class="section-wrap bg-color-overlay" style="background-image: url(img/statistic/statistic.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="statistic">
            <span class="statistic__number">36</span>
            <h5 class="statistic__title">Sucessful Projects</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="statistic">
            <span class="statistic__number">100%</span>
            <h5 class="statistic__title">Achieved ROI</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="statistic">
            <span class="statistic__number">550</span>
            <h5 class="statistic__title">Happy Customers</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="statistic">
            <span class="statistic__number">3x</span>
            <h5 class="statistic__title">Increased Profits</h5>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- end statistic -->

  
  <!-- Team -->
  <section class="section-wrap">
    <div class="container">
      <div class="title-row title-row--boxed text-center">
        <h2 class="section-title">통관에 필요한 행정 및 서류 절차</h2>
        <p class="subtitle">미국으로의 수출품은 아래의 통관 절차가 필요합니다. 더 읽어보기 버튼을 클릭하시면 각각의 절차에 대해 자세한 정보를 보실 수 있습니다.</p>
      </div>
      <div class="row">





      <?php
        $the_query = new WP_Query(array(
        'category_name' => 'export',
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => 6,
        ));

        //var_dump($posts);
        // The Loop.
        if ( $the_query->have_posts() ):
          while ( $the_query->have_posts() ):
            $the_query->the_post();
      ?>
        <div class="col-md-4">
          <div class="team">
            <?php the_post_thumbnail('medium', array('class' => 'team__img')); ?>
            <h5 class="team__name"><?= esc_html(get_the_title()); ?></h5>
            <!--<span class="team__occupation">CEO</span>-->

            <?php 
              $tags = get_the_tags();
              $html = '<div class="post_tags">';
              foreach ( $tags as $tag ) {
                  $tag_link = get_tag_link( $tag->term_id );

                  $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} team__occupation'>";
                  $html .= "{$tag->name}</a>";
              }
              $html .= '</div>';
              echo $html;
            ?>

            <p class="team__text"><?= wp_trim_words( get_the_content(), 30, '...' ) ?></p>
            <a href="<?= get_page_link() ?>" class="btn btn--md btn--color btn--icon">
              <span style="font-weight: 800">더 읽어보기</span>
              <i class="ui-arrow-right"></i>
            </a>
          </div>
        </div>
      <?php
          endwhile;
        else:
          esc_html_e( 'Sorry, no posts matched your criteria.' );
        endif;
        // Restore original Post Data.
        wp_reset_postdata();
      ?>
      </div>
    </div>
  </section> <!-- end team -->

  <!-- CTA -->
  <div class="call-to-action text-center">
    <div class="call-to-action__container">
      <h3 class="call-to-action__title">
        Get, keep and grow more customers. We’re here to help.
      </h3>
      <a href="#" class="btn btn--lg btn--color">
        <span>Let’s Work Together</span>
      </a>
    </div>                
  </div> <!-- end cta -->      


<?php
  get_footer();
?>