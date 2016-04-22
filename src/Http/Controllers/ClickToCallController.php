<?php

namespace Asimov\Solaria\Modules\ClickToCall\Http\Controllers;

use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Asimov\Solaria\Modules\ClickToCall\Models\Config;

class ClickToCallController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        $this->authorize('module_click_to_call_manage_config');

        view()->share([
            'config' => Config::firstOrNew(['site_id' => $this->site->id])
        ]);

        $data['content'] = view('moduleclicktocall::backend.index');
        return view($this->layout, $data);
    }

}