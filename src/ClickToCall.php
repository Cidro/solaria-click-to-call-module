<?php
namespace Asimov\Solaria\Modules\ClickToCall;

use Solaria\Modules\SolariaModule;

class ClickToCall implements SolariaModule {

    protected $name = 'ClickToCall';

    protected $menu_name = 'Click To Call';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/click-to-call');
    }

    public function getBackendStyles() {
        return [asset('modules/click-to-call/css/click-to-call-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/click-to-call/js/click-to-call-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'click-to-call';
    }
}