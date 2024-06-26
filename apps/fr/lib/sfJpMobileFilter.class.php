<?php
/* vim:set expandtab tabstop=4 softtabstop=4 shiftwidth=4: */
/**
 * モバイルページ用フィルタ
 *
 * @package     sfJpMobile
 * @subpackage  filter
 * @version     $Id$
 */
class sfJpMobileFilter extends sfFilter
{
    /**
     * @param sfFilter $filterChain
     */
    public function execute($filterChain)
    {
        if (sfJpMobile::getInstance()->isMobile()) {
            if ($this->isFirstCall()) {
                // UIDの取得
                $this->_checkUid();
                // パラメータをシステム内で扱いやすいように変換
                $this->_paramConvert();
                // キャッシュ制御設定
                $this->_setCacheControl();
                // Content-Typeの設定
                $this->_setContentType();
            }
            $filterChain->execute();
            // 出力データの加工
            $this->_convertContent();
        } else {
            $filterChain->execute();
        }
    }
    /**
     * UIDが取得できる状態かどうか
     * 取得のためのパラメータが設定されていなかったら、パラメータを付けてリダイレクトする
     *
     * @return null
     */
    private function _checkUid()
    {
        $context = $this->getContext();
        $req = $context->getRequest();
        if ($req->isMethod('get') && sfJpMobile::getInstance()->isDocomo() && $req->getParameter('guid') == null) {
            $uri = getenv('REQUEST_URI');
            $uri .= strpos($uri, '?') === false ? '?' : '&';
            $context->getController()
                    ->getAction($context->getModuleName(), $context->getActionName())
                    ->redirect("{$uri}guid=ON");
        }
//        apache_note('uid', sfJpMobile::getInstance()->getUid());
    }
    /**
     * パラメータの変換
     * @return null
     */
    private function _paramConvert()
    {
        if (sfJpMobile::getInstance()->isDocomo() || sfJpMobile::getInstance()->isAu()) {
            $this->getContext()->getRequest()->addRequestParameters($this->convertEncoding($this->getContext()->getRequest()->getParameterHolder()->getAll()));
        }
    }
    /**
     * encode
     *
     * @param   string  $value
     * @return  string
     */
    private function convertEncoding($value)
    {
        if (is_array($value)) {
            foreach ($value as &$v) {
                $v = $this->convertEncoding($v);
            }
        } else {
            $value = mb_convert_encoding($value, 'UTF-8', 'ASCII,JIS,UTF-8,EUCJP-win,SJIS-win');
        }
        return $value;
    }
    /**
     * Content-Typeの設定
     * @return null
     */
    private function _setContentType()
    {
        $response = $this->getContext()->getResponse();
        if (sfJpMobile::getInstance()->isDocomo()) {
            // TODO XHTML対応機種かどうかの判別を入れる
            $response->setHttpHeader("Content-Type", "application/xhtml+xml; charset=Shift_JIS");
            $response->setContentType("application/xhtml+xml; charset=Shift_JIS");
        } else if (sfJpMobile::getInstance()->isAu()) {
            $response->setHttpHeader("Content-Type", "text/html; charset=Shift_JIS");
            $response->setContentType("text/html; charset=Shift_JIS");
        } else {
            $response->setHttpHeader("Content-Type", "text/html; charset=UTF-8");
            $response->setContentType("text/html; charset=UTF-8");
        }
    }
    /**
     * キャッシュ制御
     * @return null
     */
    private function _setCacheControl()
    {
        $response = $this->getContext()->getResponse();
        $response->setHttpHeader("Expires", "Thu, 01 Dec 1994 16:00:00 GMT");
        $response->setHttpHeader("Last-Modified", gmdate("D, d M Y H:i:s")." GMT");
        $response->setHttpHeader("Cache-Control", "no-cache,must-revalidate");
        $response->setHttpHeader("Cache-Control", "post-check=0,pre-check=0", false);
        $response->setHttpHeader("Pragma", "no-cache");
    }
    /**
     * 出力コンテンツの変換
     * @return null
     */
    private function _convertContent()
    {
        $content = $this->getContext()->getResponse()->getContent();
        // 絵文字変換
        if (!sfJpMobile::getInstance()->isDocomo()) {
            $content = sfJpMobile::getInstance()->getEmoji()->convert($content);
        }
        // 出力文字コードの変更
        if (sfJpMobile::getInstance()->isDocomo() || sfJpMobile::getInstance()->isAu()) {
            $content = mb_convert_encoding($content, 'SJIS-win', 'UTF-8');
        }
        $this->getContext()->getResponse()->setContent($content);
    }
}
