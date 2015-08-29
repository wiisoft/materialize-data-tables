<?php
/**
 * Created by PhpStorm.
 * User: zimovid
 * Date: 23.08.15
 * Time: 22:09
 */

namespace wii\dataTable;


use wii\materialize\Widget;
use yii\web\JqueryAsset;
use yii\web\View;

class DataTablesWidget extends Widget
{
    public $items;

    public function init(){
        $this->getView()->registerJsFile('//cdn.datatables.net/1.10.8/js/jquery.dataTables.js',[
            'depends'=>[
                JqueryAsset::className(),
            ],
            'position'=>View::POS_END
        ]);
        $this->getView()->registerJsFile('/backend/js/plugins/data-tables/data-tables-script.js',[
            'depends'=>[
                JqueryAsset::className()
            ],
            'position'=>View::POS_END
        ]);
        $this->getView()->registerCssFile('/backend/js/plugins/data-tables/css/jquery.dataTables.min.css',[
            'position'=>View::POS_HEAD
        ]);
        parent::init();
    }

    protected function renderItems(){

    }

}