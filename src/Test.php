<?php

namespace App;

use Amp\Parallel\Worker;
use Amp\Promise;

class Test
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient = null)
    {
        $this->httpClient = $httpClient ?: new HttpClient();
    }

    public function run()
    {
        $resultPromises = [];

        foreach ($this->makeDelays() as $delay) {
            $resultPromises[] = Worker\enqueueCallable(
                [$this, 'makeResult'],
                $delay,
            );
        }

        return Promise\wait(Promise\all($resultPromises));
    }

    /**
     * Non serializable method
     */
    public function makeResult(string $delay)
    {
        return $this->httpClient->get($delay);
    }

    private function makeDelays(): array
    {
        return [1, 1, 1, 1, 1, 2];
    }
}
