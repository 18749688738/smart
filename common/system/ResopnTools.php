<?php
/**
 * Created by PhpStorm.
 * User: lxd
 * Date: 2018/9/14
 * Time: 10:55
 */

namespace common\system;


use Yii;

class ResopnTools
{

    /** 通用json放回
     * @param array $data
     * @param string $message
     * @param int $code
     * @return bool
     */
    public static function ajaxReturn($data = [], $message = 'success', $code = 200)
    {
        try {
            if (empty($data)) {
                $data = null;
            }
            if (is_array($message)) {
                $message = current($message);
            }
            $returnData = [
                'code' => $code,
                'message' => $message,
                'data' => $data,
            ];
            $response = Yii::$app->response;
            // 返回JSON数据格式到客户端 包含状态信息
            $response->data = $returnData;
            $response->format = \yii\web\Response::FORMAT_JSON;
            Yii::$app->end();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function success($data = [], $message = 'success', $code = 200)
    {
        return self::ajaxReturn($data, $message, $code);
    }

    public static function error( $message = 'error', $code = 400, $data = [])
    {
        return self::ajaxReturn($data, $message, $code);
    }


}