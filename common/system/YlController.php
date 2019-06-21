<?php
/**
 * Created by PhpStorm.
 * User: lxd
 * Date: 2018/9/17
 * Time: 10:52
 */

namespace common\system;


use yii\base\Model;
use yii\rest\Controller;

/**复写的控制器,用于自定义
 * Class YlController
 * @package common\system
 */
class YlController extends Controller
{
    public $form = '';


//    public function beforeAction($action)
//    {
//        //父方法
//        $res =  parent::beforeAction($action);
//        if (!$res) {
//            return $res;
//        }
//        return true;
//    }

    /**表单校验方法
     * @param $form string 类
     * @param $data array 数据
     * @param $scenario string 场景
     */
    public function validateRequest($form, $data = [], $scenario = 'default')
    {
        $model = '';
        if ($form) {
            $model  = \Yii::createObject($form);
        } elseif($this->form) {
            $model  = \Yii::createObject($this->form);
        }
        if (!$model || !$data) {
            return true;
        }
        //场景
        if ($scenario != 'default') {
            $model->setScenario($scenario);
        }
        $model->attributes = $data;
        //验证
        if (!$model->validate()) {
            return ResopnTools::error(current($model->getFirstErrors()));
            \Yii::$app->end();
        }

    }

}