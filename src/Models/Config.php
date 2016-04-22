<?php
namespace Asimov\Solaria\Modules\ClickToCall\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model {

    protected $table = 'module_click_to_call_config';

    /**
     * @param $value
     */
    public function setConfigAttribute($value){
        $this->attributes['config'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getConfigAttribute($value){
        return json_decode($value);
    }

}