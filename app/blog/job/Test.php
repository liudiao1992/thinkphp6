<?php
/*
 * @author: liudiao
 * @Date: 2023-07-13 18:23:19
 * @Description: 测试redis队列
 */
namespace app\blog\job;
use think\facade\Log;
use think\queue\Job;

class Test{
    public function fire(Job $job, $data)
    {
        Log::info("Test队列:".json_encode($data));
        $rt = $this->doJob($data);
    
        if($rt){
            $job->delete();
            return true;
        }

        // 重试三次失败 todo...
        if($job->attempts() == 3){
            $job->delete();
            return false;
        }
        
        //执行失败10S后重试
        $job->release(10);
    }

    //ceshi 
    public function doJob($data)
    {
        echo "队列执行了:a=".$data['a'].', b='.$data['b'].'--'.date('Y-m-d H:i:s');
        return true;
    }


}