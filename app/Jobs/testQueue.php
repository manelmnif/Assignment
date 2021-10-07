<?php

namespace App\Jobs;

use App\Jobs\Job;
use Log;
use Illuminate\Http\Request;

class testQueue extends Job
{
    public $queue;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->queue = $data['queue'];
    }
    /**
     * Execute the job.
     *
     * @param  
     * @return void
     */

    public function handle() {
     // Log::info('Hello! Queue job '.$this->queue.' is run at start time - '.microtime(true));
     error_log('Some message here.');
 }
}
