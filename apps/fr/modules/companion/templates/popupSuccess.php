<div id="companion_popup"<?php if($Shop_id == 4): ?> class="ms"<?php endif; ?>>
  <div id="picbox"<?php if($Shop_id == 2): ?> class="kobe"<?php endif; ?>>
    <ul id="thumbs">
      <?php foreach($Picnums as $k => $v): ?>
      <li>
      <a href="/uploads/companion/<?php echo $Companion['pic'.$v] ?>" onmouseover="replace('<?php echo $v ?>')" rel="ibox">
      <?php echo image_tag('/uploads/companion/'.$Companion['pic'.$v], array('class'=>'thumb')) ?>
      </a>
      </li>
      <?php endforeach; ?>
    </ul>
  <div id="pic">
    <?php foreach($Picnums as $k => $v): ?>
      <?php if($k==0): ?>
      <a href="/uploads/companion/<?php echo $Companion['pic'.$v] ?>" rel="ibox" id="<?php echo 'pic'.$v ?>" class="clearfix"><?php echo image_tag('/uploads/companion/'.$Companion['pic'.$v], array('class'=>'pic')) ?></a>
      <?php else: ?>
      <a href="/uploads/companion/<?php echo $Companion['pic'.$v] ?>" rel="ibox" id="<?php echo 'pic'.$v ?>" class="clearfix" style="display:none;"><?php echo image_tag('/uploads/companion/'.$Companion['pic'.$v], array('class'=>'pic')) ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php include_component('schedule', 'getCompanionSchedule', array('cid' => $Companion['id'])) ?>
  </div>
  <div id="detail" class="clearfix">
    <?php if($Shop_id == 4): ?>
    <?php echo image_tag('/images/companion_pu/title_bg_ms.gif') ?>
    <?php else: ?>
    <?php echo image_tag('/images/companion_pu/title_bg.gif') ?>
    <?php endif; ?>
    <div id="datailinner" class="clearfix">
      <div id="name">
<!--
        <?php echo image_tag('/uploads/rank/'.$Companion['rankpic'], array('width'=>'120px', 'class'=>'rankpic right')) ?>
-->
        <div id="waittime">
<?php if($Companion['shop_id'] != 1): ?>
【ご案内可能時刻】<br>
          <span style="font-weight:bold;"><?php echo $Companion->getTimeupStr() ?></span>
<?php else : ?>
【本日の出勤時刻】<br>
          <span style="font-weight:bold;"><?php echo $Companion->getWorktimeStr() ?></span>
<?php endif; ?>
        </div>
        <span id="nameage"><?php echo $Companion['name'] ?>(<?php echo $Companion['age'] ?>)</span><br />
        <span id="spec">T<?php echo $Companion['t'] ?>&nbsp;B<?php echo $Companion['b'] ?>(<?php echo $Companion['cup'] ?>)&nbsp;W<?php echo $Companion['w'] ?>&nbsp;H<?php echo $Companion['h'] ?></span>
      </div>
      <div id="icons">
        <?php include_component('companion', 'geticons', array('cid' => $Companion['id'])) ?>
      </div>
      <div id="comment" class="clearfix">
【本人コメント】<br />
        <div class="combox">
          <?php echo nl2br($Companion->getComment(ESC_RAW)) ?><br clear="all" />
        </div>
      </div>
      <div id="shopcomment" class="clearfix">
【店舗コメント】<br />
        <p class="combox">
          <?php echo nl2br($Companion->getShopcomment(ESC_RAW)) ?>
        </p>
      </div>
      <div id="onelinecomment">
        <marquee><?php echo $Companion['onelinecomment'] ?><br clear="all" /></marquee>
      </div>
    </div>
  </div>
  <?php if($Companion->getItem8()): ?>
    <iframe name="disp" id="disp" width="296px" height="628px" allowTransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" scrolling="no" scrolling="auto" frameborder="0" src="https://fuzoku.jp/bijyukujyon/girl/<?php echo $Companion->getItem8() ?>/girlsdiary/"></iframe>
  <!-- <iframe name="disp" id="disp" width="296px" height="628px" allowTransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" scrolling="no" scrolling="auto" frameborder="0" src="https://api.purelovers.com/official/plc/parts/?mode=girl_diary&shop_id=9000&girl_id=<?php echo $Companion->getItem8() ?>&sub-tit-color=fffac6&sub-tit-font-color=888888&body-color=FFFFFF&tit-color=ffb400&tit-font-color=FFFFFF&border-color=f18507&listbg-color=fffac6&width=250&height=500"></iframe> -->
  <!-- <iframe scrolling="no" frameborder="0" style="overflow:hidden;width:296px;height:680px;border:none;margin:0;padding:0;" allowtransparency="true" src="<?php echo $Companion->getItem8() ?>" ></iframe> -->
  <?php endif; ?>
</div>
