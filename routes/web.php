<?php

use App\Jobs\Job;
use Illuminate\Support\Facades\Queue;
use App\Jobs\testQueue;
use Illuminate\Contracts\Queue\Job as QueueJob;
use Illuminate\Queue\Jobs\Job as JobsJob;
use Pheanstalk\Job as PheanstalkJob;



/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


// push a job to the queue
$router->get('/', function () use ($router) {
    //return $router->app->version();
    //echo("hello from lumen");
  
    for($i=0; $i<=10; $i++){
        Queue::push(new testQueue( array('queue' => $i)));
echo "successfully push";
}





  
});

// remove a job by his id from queue
$router->post('/', function () use ($router) {
  
 

    $sqs_instance=Queue::pop();
    $sqs_instance->delete(1);
    echo "successfully removed";
  
});

$router->get('/retreive', function () use ($router) {
  
 

  
  
});




