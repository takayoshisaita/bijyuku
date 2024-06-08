<h2>相互リンク用バナー</h2>
<div id="banner">
<span>※HTMLタグをコピーしてお使い下さい</span><br />
<br />

<?php echo image_tag('/images/common/banner_88x31.gif', array('style'=>'width:88px;height:31px')) ?>
<span>88 x 31px</span><br />
<span>HTMLタグ</span><br />
<textarea name="banner_s" rows="2" cols="105" wrap="off">
&lt;a href="http://www.bijyuku.com/" target="_blank"&gt;&lt;img src="http://www.bijyuku.com/images/common/banner_88x31.gif" alt="大阪日本橋の美しすぎる熟女ホテルヘルス美熟な奥さん" border="0"&gt;&lt;/a&gt;
</textarea>
<br clear="all"/>
<br />
<?php echo image_tag('/images/common/banner_200x40.gif', array('style'=>'width:200px;height:40px')) ?>
<span>200 x 40px</span><br />
<span>HTMLタグ</span><br />
<textarea name="banner_l" rows="2" cols="105" wrap="off">
&lt;a href="http://www.bijyuku.com/" target="_blank"&gt;&lt;img src="http://www.bijyuku.com/images/common/banner_200x40.gif" width="200" height="40" alt="大阪日本橋の美しすぎる熟女ホテルヘルス美熟な奥さん" border="0"&gt;&lt;/a&gt;
</textarea>
</div>


<h2>リンク集</h2>
<div id="linktable">
<ul>
<?php foreach($linkbanners as $linkbanner):  ?>
  <li><?php echo link_to(image_tag('/uploads/linkbanner/'.$linkbanner->getPic(), array('alt'=>$linkbanner->getName())), $linkbanner->getUrl(), array('target' => '_blank')) ?></li>
<?php endforeach; ?>
</ul>

<div style="display: inline-block;width: 468px;height: 60px;background: url(https://www.deli-map.com/img/fgb/08/bg.gif) no-repeat;font-size: 0;line-height: 0;text-align: left;margin: 0 0 5px 0;padding:0;-webkit-background-size: 468px 60px;background-size: 468px 60px;">
  <div style="display: inline-block;vertical-align: top;width: 114px;height: 60px;margin: 0;padding: 0;">
    <a href="https://www.deli-map.com/" target="_blank" style="display: inline-block;margin: 0;padding: 0;width: 114px;height: 60px;">
      <img src="https://www.deli-map.com/img/fgb/08/logo.gif" width="110" height="60" alt="人気ランキング「デリヘルMAP」" style="width: 110px; height: 60px;margin: 0;padding: 0;">
    </a>
  </div>
  <div style="display: inline-block;vertical-align: top;margin: 0;padding: 4px 0 0 0; width: 354px;height: 56px;">
    <a href="https://www.deli-map.com/08/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 174px;height: 25px;">
      <img src="https://www.deli-map.com/img/fgb/08/01.gif" width="174" height="25" style="width: 174px; height: 25px;margin: 0;padding: 0;" alt="東京デリヘルMAP">
    </a>
    <a href="https://www.deli-map.com/08/rank/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 174px;height: 25px;">
      <img src="https://www.deli-map.com/img/fgb/08/02.gif" width="174" height="25" style="width: 174px; height: 25px;margin: 0;padding: 0;" alt="東京デリヘル人気ランキング">
    </a>
    <a href="https://www.deli-map.com/08/101/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 86px;height: 25px;">
      <img src="https://www.deli-map.com/img/fgb/08/03.gif" width="86" height="25" style="width: 86px; height: 25px;margin: 0;padding: 0;" alt="新宿区デリヘル"></a>
      <a href="https://www.deli-map.com/08/100/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 86px;height: 25px;">
        <img src="https://www.deli-map.com/img/fgb/08/04.gif" width="86" height="25" style="width: 86px; height: 25px;margin: 0;padding: 0;" alt="渋谷区デリヘル">
      </a>
      <a href="https://www.deli-map.com/08/128/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 86px;height: 25px;">
        <img src="https://www.deli-map.com/img/fgb/08/05.gif" width="86" height="25" style="width: 86px; height: 25px;margin: 0;padding: 0;" alt="八王子デリヘル">
      </a>
      <a href="https://www.deli-map.com/08/136/" target="_blank" style="display: inline-block;vertical-align: top;margin:0 2px 2px 0;padding: 0;width: 86px;height: 25px;">
        <img src="https://www.deli-map.com/img/fgb/08/06.gif" width="86" height="25" style="width: 86px; height: 25px;margin: 0;padding: 0;" alt="町田デリヘル"></a>
      </div>
    </div>
</div>
<br clear="all" />