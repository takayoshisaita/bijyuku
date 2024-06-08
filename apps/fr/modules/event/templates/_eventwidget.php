<div id="eventwidget">
<!--
  <div id="list">
    <?php foreach($Events as $k => $v): ?>
      <?php echo image_tag('/uploads/event/'.$v['pic'], array('width'=>'120px')) ?>
    <?php endforeach; ?>
  </div>
-->


      <div id="container" class="clearfix">
        <!-- Start Advanced Gallery Html Containers -->
        <div id="gallery" class="content clearfix">
          <div class="slideshow-container clearfix">
            <div id="loading" class="loader clearfix"></div>
            <div id="slideshow" class="slideshow clearfix"></div>
          </div>
          <div id="caption" class="caption-container"></div>
        </div>
        <div id="thumbs" class="navigation">
          <ul class="thumbs noscript">

            <?php foreach($Events as $k => $v): ?>
            <li>
              <a class="thumb" name="leaf" href="<?php echo '/uploads/event/'.$v['pic'] ?>" title="Title #0">
                <img src="<?php echo '/uploads/event/'.$v['pic'] ?>" alt="Title #0" />
                <span id="project-path" style="display:none;"><?php echo url_for($Route.'?module=event&action=index&id='.$v['id']) ?></span>
              </a>
<!--
              <div class="caption">
                <div class="download">
                  <a href="<?php echo '/uploads/event/'.$v['pic'] ?>">Download Original</a>
                </div>
                <div class="image-title">Title #0</div>
                <div class="image-desc">Description</div>
              </div>
-->
            </li>
            <?php endforeach; ?>

          </ul>
        </div>
        <div style="clear: both;"></div>
        <div id="controls" class="controls"></div>
      </div>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({'width' : '162px', 'float' : 'right'});
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.67;
        $('#thumbs ul.thumbs li').opacityrollover({
          mouseOutOpacity:   onMouseOutOpacity,
          mouseOverOpacity:  1.0,
          fadeSpeed:         'fast',
          exemptionSelector: '.selected'
        });

        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
          delay:                     4500,
          numThumbs:                 3,
          preloadAhead:              10,
          enableTopPager:            false,
          enableBottomPager:         false,
          maxPagesToShow:            7,
          imageContainerSel:         '#slideshow',
          controlsContainerSel:      '#controls',
          captionContainerSel:       '#caption',
          loadingContainerSel:       '#loading',
          renderSSControls:          true,
          renderNavControls:         false,
          playLinkText:              'スライドを再生',
          pauseLinkText:             'スライドを一時停止',
          prevLinkText:              '&lsaquo; Previous Photo',
          nextLinkText:              'Next Photo &rsaquo;',
          nextPageLinkText:          'Next &rsaquo;',
          prevPageLinkText:          '&lsaquo; Prev',
          enableHistory:             false,
          autoStart:                 true,
          syncTransitions:           true,
          defaultTransitionDuration: 900,
          onSlideChange:             function(prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs').children()
              .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
              .eq(nextIndex).fadeTo('fast', 1.0);
          },
          onPageTransitionOut:       function(callback) {
            this.fadeTo('fast', 0.0, callback);
          },
          onPageTransitionIn:        function() {
            this.fadeTo('fast', 1.0);
          }
        });
      });
    </script>
</div>
