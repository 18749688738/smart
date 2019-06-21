<?php
/**
 * Created by PhpStorm.
 * User: lxd
 * Date: 2018/9/14
 * Time: 10:27
 */

namespace common\system;


use yii\base\Model;

class Form extends Model
{

//    /**错误信息
//     * @var array 内容为 [ ['字段' => '错误信息'], [],.......]
//     */
//    public $errors = [];
//
//    /**得到所有错误信息
//     * @return array
//     */
//    public function getErrors()
//    {
//        return $this->errors;
//    }
//
//    /**得到第一个错误内容
//     * @return array|mixed
//     */
//    public function getFirstErrorMessage()
//    {
//        if (empty($this->errors)) {
//            return [];
//        }
//        $errors = [];
//        foreach ($this->errors as $name => $es) {
//            if (!empty($es)) {
//                $errors[$name] = reset($es);
//            }
//        }
//        return current($errors);
//    }
//
//    /** 得到第一个错误数组
//     * @return array
//     */
//    public function getFirstErrors()
//    {
//        if (empty($this->errors)) {
//            return [];
//        }
//        $errors = [];
//        foreach ($this->errors as $name => $es) {
//            if (!empty($es)) {
//                $errors[$name] = reset($es);
//            }
//        }
//        return $errors;
//    }
//
//    /**验证方法
//     * @param $data array 需要验证的数据
//     * @param $rule array 验证规则
//     */
//    public function validate($data, $rule)
//    {
//        try{
//            $model = DynamicModel::validateData( $data, $rule );
//            if ($model->hasErrors()) {
//                $this->errors = $model->getErrors();
//                return false;
//            }
//            return true;
//        }catch(\Throwable $t){
//            $this->errors[] = ['message' => '未知错误'];
//            return false;
//        }
//    }

    
}