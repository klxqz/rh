<?php

class shopRhPluginBackendSavesettingsController extends waJsonController {

    protected $plugin_id = array('shop', 'rh');

    public function execute() {
        try {
            $app_settings_model = new waAppSettingsModel();
            $settings = waRequest::post('shop_rh', array());

            foreach ($settings as $name => $value) {
                $app_settings_model->set($this->plugin_id, $name, $value);
            }


            $this->response['message'] = "Сохранено";
        } catch (Exception $e) {
            $this->setError($e->getMessage());
        }
    }

}
