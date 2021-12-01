<?php

namespace App;

use Amp\Parallel\Worker;
use Amp\Future;
use function Amp\launch;

class Test
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient = null)
    {
        $this->httpClient = $httpClient ?: new HttpClient();
    }

    public function run(): array
    {
        $futures = [];

        foreach ([1, 1, 1, 1, 1, 2] as $delay) {
            $futures[] = launch(fn () => Worker\enqueueCallable(
                [$this, 'makeResult'],
                $delay,
            ));
        }

        return Future\all($futures);
    }

    /**
     * Non serializable method
     */
    public function makeResult(string $delay): array
    {
        return $this->httpClient->get($delay);
    }
}
