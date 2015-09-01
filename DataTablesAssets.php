<?php
/**
 * Created by PhpStorm.
 * User: zimovid
 * Date: 26.08.15
 * Time: 0:52
 */
namespace wii\dataTable;

class DataTablesAssets extends \yii\web\AssetBundle{

    const STYLING_DEFAULT = 'default';
    const STYLING_BOOTSTRAP = 'bootstrap';
    const STYLING_JUI = 'jqueryui';
    const STYLING_FOUNDATION = 'foundtaion';

    public $style = self::STYLING_DEFAULT;

    public $sourcePath = '@bower/datatables/media';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init(){
        parent::init();

        switch ($this->style) {
            case self::STYLING_JUI:
                $this->depends[] = 'yii\jui\JuiAsset';
                $this->css[] = 'css/dataTables.jqueryui.min.css';
                $this->js[] = 'js/dataTables.jqueryui.min.js';
                break;
            case self::STYLING_BOOTSTRAP:
                $this->depends[] = 'yii\bootstrap\BootstrapAsset';
                $this->css[] = 'css/dataTables.bootstrap.min.css';
                $this->js[] = 'js/dataTables.bootstrap.min.js';
                break;
            case self::STYLING_FOUNDATION:
                $this->css[] = 'css/dataTables.foundation.min.css';
                $this->js[] = 'dataTables.foundation.min.js';
                break;
            case self::STYLING_DEFAULT:
                $this->css[] = 'css/jquery.dataTables.min.css';
                $this->js[] = 'js/jquery.dataTables.min.js';
                break;
        }
    }
}