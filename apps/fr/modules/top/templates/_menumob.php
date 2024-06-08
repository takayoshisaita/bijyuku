<div id="menu_bar_mob" style="text-align:center;">

  <table width="100%" style="border-collapse:collapse; font-size:x-small; text-align:center;">
  <tbody>
    <tr>
    <td width="50%" bgcolor="#FFFFFF" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('TOP', url_for('@default?module=top&action=index')) ?></td>
    <td width="50%" bgcolor="#111874" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('新着情報', url_for('@default?module=topic&action=index'), array('style'=>'color: #FFFFFF;')) ?></td>
    </tr>
    <tr>
    <td width="50%" bgcolor="#111874" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('出勤情報', url_for('@default?module=schedule&action=index'), array('style'=>'color: #FFFFFF;')) ?></td>
    <td width="50%" bgcolor="#FFFFFF" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('女性紹介', url_for('@default?module=companion&action=index')) ?></td>
    </tr>
    <tr>
    <td width="50%" bgcolor="#FFFFFF" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('プレイ内容', url_for('@default?module=play&action=index')) ?></td>
    <td width="50%" bgcolor="#111874" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('料金案内', url_for('@default?module=price&action=index'), array('style'=>'color: #FFFFFF;')) ?></td>
    </tr>
    <tr>
    <td width="50%" bgcolor="#111874" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('遊び方・ご利用方法', url_for('@default?module=system&action=index'), array('style'=>'color: #FFFFFF;')) ?></td>
    <td width="50%" bgcolor="#FFFFFF" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('ﾒﾙﾏｶﾞ登録', url_for('@default?module=mail_mag&action=index')) ?></td>
    </tr>
    <tr>
    <td width="50%" bgcolor="#FFFFFF" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E"><?php echo link_to('お問い合わせ', url_for('@default?module=inquiry&action=new')) ?></td>
    <td width="50%" bgcolor="#111874" style="border-collapse:separate; border-spacing:1; border: 1px solid #6D574E">
    <!--
    <a href="http://www.bijyuku.com/blog/" target="_blank">ｵﾌｨｼｬﾙﾌﾞﾛｸﾞ</a>
     -->
    </td>
    </tr>
  </tbody>
  </table>
</div>