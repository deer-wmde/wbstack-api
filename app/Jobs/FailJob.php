<?php

namespace App\Jobs;

class FailJob extends Job
{
    public function handle(): void
    {
        $this->fail('This job is failing intentionally. Have a nice day.');
    }
}
