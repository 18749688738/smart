<?php
/**
 * Created by PhpStorm.
 * User: lxd
 * Date: 2018/9/13
 * Time: 13:40
 */

namespace api\lib;



class Api
{
    public static $instance;
    public $serviceIntance = [];

    /**返回api实例
     * @return self
     */
    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        } else {
            return new static();
        }
    }

    /**返回服务实例
     * @param string $serviceClass 服务名称
     * @return mixed
     */
    public function getService($serviceClass = '')
    {
        if ($serviceClass) {
            if (!isset($serviceIntance[$serviceClass])) {
                $this->serviceIntance[$serviceClass] = new $serviceClass();
                //$this->serviceIntance[$serviceClass] =  Yii::createObject( $serviceClass,[]);
            }
            return $this->serviceIntance[$serviceClass];
        }
        return current($this->serviceIntance);
    }


}