<?php

class shopRhPlugin extends shopPlugin {

    public function frontendHead() {
        if ($this->getSettings('status') && ($login = $this->getSettings('login'))) {
            $view = wa()->getView();
            $view->assign('login', $login);
            $template_path = wa()->getAppPath('plugins/rh/templates/actions/frontend/FrontendHead.html', 'shop');
            $html = $view->fetch($template_path);
            return $html;
        }
    }

}
