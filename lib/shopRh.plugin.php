<?php

class shopRhPlugin extends shopPlugin {

    public function frontendHead() {
        if ($this->getSettings('status') && ($login = $this->getSettings('login'))) {
            $html = <<<HTML
<!-- RedHelper -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" src="https://web.redhelper.ru/service/main.js?c={$login}"></script> 
<!--/Redhelper -->
HTML;
            return $html;
        }
    }

}
