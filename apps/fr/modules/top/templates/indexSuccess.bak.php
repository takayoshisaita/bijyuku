<h1></h1>
<div id="contentbox" class="clearfix">
<div id="leftcolumn" class="clearfix">
<!--
  <a href="http://work.bijyuku.com" id="recruit" target="_blank">
    <img alt="大阪セラピスト求人" src="/images/common/kyuujin_w236.jpg">
  </a>
  <a href="<?php echo url_for('http://www.bijyuku.com/blog/') ?>" target="_blank" id="shamenikki">
    <img alt="美熟な奥さん写メ日記" src="/images/common/shamenikki_w236.jpg">
  </a>
 -->
  <div id="sidemenu">
    <?php echo image_tag('/images/common/NEW03anime.gif', array('class'=>'new_icon')) ?>
    <a href="http://work.bijyuku.com" id="recruit" target="_blank"></a>
    <a href="<?php echo url_for('https://api.purelovers.com/official/plc/parts/?mode=shop_girl_diary&shop_id=9000&body-color=FFFFFF&tit-color=ffb400&tit-font-color=FFFFFF&border-color=f18507&listbg-color=fffac6&width=250&height=500') ?>" target="_blank" id="shamenikki">
      <img alt="美熟な奥さん写メ日記" src="/images/common/shamenikki_w236.jpg">
    </a>
 <!--
    <a href="https://bite-ex.com/mag/2764/8/" target="_blank" id="mailmag"></a>
 -->
  </div>
    <?php include_component('schedule', 'schedulewidget')  ?>
    <a href="#" id="open-comic">
    ↓体験マンガを読む<br />
      <img src="/images/play/comic_w228.jpg" alt="体験マンガ" />
    </a>
</div>
<div id="rightcolumn" class="clearfix">
  <?php include_component('event', 'eventwidgetbx')  ?>
  <?php include_component('top', 'topicwidget')  ?>
</div>
</div>
<script type="text/javascript" src="/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#open-comic').magnificPopup({
	  items: [
  		{
  			src: '/images/play/comic01.jpg',
  			title: 'Page 1'
  	  },
  		{
  			src: '/images/play/comic02.jpg',
  			title: 'Page 2'
  	  },
  		{
  			src: '/images/play/comic03.jpg',
  			title: 'Page 3'
  	  }
    ],
    gallery: {
        enabled: true
    },
    type: 'image'
  });
});
</script>
