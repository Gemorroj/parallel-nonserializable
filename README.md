```bash
php index.php
```

```
Fatal error: Uncaught BadMethodCallException: Cannot serialize Symfony\Component\HttpClient\CurlHttpClient in S:\VCS\Git\parallel-nonserializable\vendor\symfony\http-client\CurlHttpClient.php:353
Stack trace:
#0 [internal function]: Symfony\Component\HttpClient\CurlHttpClient->__sleep()
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\serialization\src\NativeSerializer.php(21): serialize()
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Sync\ChannelParser.php(36): Amp\Serialization\NativeSerializer->serialize()
#3 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Sync\ChannelledStream.php(53): Amp\Parallel\Sync\ChannelParser->encode()
#4 [internal function]: Amp\Parallel\Sync\ChannelledStream->Amp\Parallel\Sync\{closure}()
#5 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(67): Generator->current()
#6 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php(96): Amp\Coroutine->__construct()
#7 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Sync\ChannelledStream.php(57): Amp\call()
#8 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Sync\ChannelledSocket.php(50): Amp\Parallel\Sync\ChannelledStream->send()
#9 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php(258): Amp\Parallel\Sync\ChannelledSocket->send()
#10 [internal function]: Amp\Parallel\Context\Process->Amp\Parallel\Context\{closure}()
#11 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(67): Generator->current()
#12 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php(96): Amp\Coroutine->__construct()
#13 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php(278): Amp\call()
#14 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\Internal\WorkerProcess.php(28): Amp\Parallel\Context\Process->send()
#15 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\TaskWorker.php(121): Amp\Parallel\Worker\Internal\WorkerProcess->send()
#16 [internal function]: Amp\Parallel\Worker\TaskWorker->Amp\Parallel\Worker\{closure}()
#17 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(118): Generator->send()
#18 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Coroutine->Amp\{closure}()
#19 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(123): Amp\Coroutine->resolve()
#20 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Coroutine->Amp\{closure}()
#21 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(123): Amp\Coroutine->resolve()
#22 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Coroutine->Amp\{closure}()
#23 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(123): Amp\Coroutine->resolve()
#24 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(46): Amp\Coroutine->Amp\{closure}()
#25 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\PrivatePromise.php(23): Amp\Promise@anonymous->onResolve()
#26 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(143): Amp\Internal\PrivatePromise->onResolve()
#27 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Deferred.php(53): Amp\Promise@anonymous->resolve()
#28 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php(282): Amp\Deferred->resolve()
#29 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Promise\{closure}()
#30 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Deferred.php(53): Amp\Promise@anonymous->resolve()
#31 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Internal\ProcessHub.php(98): Amp\Deferred->resolve()
#32 [internal function]: Amp\Parallel\Context\Internal\ProcessHub::Amp\Parallel\Context\Internal\{closure}()
#33 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(118): Generator->send()
#34 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(46): Amp\Coroutine->Amp\{closure}()
#35 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(143): Amp\Coroutine->onResolve()
#36 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Deferred.php(53): Amp\Promise@anonymous->resolve()
#37 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php(282): Amp\Deferred->resolve()
#38 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Promise\{closure}()
#39 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Coroutine.php(123): Amp\Coroutine->resolve()
#40 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Internal\Placeholder.php(149): Amp\Coroutine->Amp\{closure}()
#41 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Deferred.php(53): Amp\Promise@anonymous->resolve()
#42 S:\VCS\Git\parallel-nonserializable\vendor\amphp\byte-stream\lib\ResourceInputStream.php(101): Amp\Deferred->resolve()
#43 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Loop\NativeDriver.php(327): Amp\ByteStream\ResourceInputStream::Amp\ByteStream\{closure}()
#44 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Loop\NativeDriver.php(127): Amp\Loop\NativeDriver->selectStreams()
#45 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Loop\Driver.php(138): Amp\Loop\NativeDriver->dispatch()
#46 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Loop\Driver.php(72): Amp\Loop\Driver->tick()
#47 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\Loop.php(95): Amp\Loop\Driver->run()
#48 S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php(229): Amp\Loop::run()
#49 S:\VCS\Git\parallel-nonserializable\src\Test.php(28): Amp\Promise\wait()
#50 S:\VCS\Git\parallel-nonserializable\index.php(7): App\Test->run()
#51 {main}

Next Amp\Serialization\SerializationException: The given data could not be serialized: Cannot serialize Symfony\Component\HttpClient\CurlHttpClient in S:\VCS\Git\parallel-nonserializable\vendor\amphp\serialization\src\NativeSerializer.php on line 23

Amp\Serialization\SerializationException: The given data could not be serialized: Cannot serialize Symfony\Component\HttpClient\CurlHttpClient in S:\VCS\Git\parallel-nonserializable\vendor\amphp\serialization\src\NativeSerializer.php on line 23

Call Stack:
    0.0001     391800   1. {main}() S:\VCS\Git\parallel-nonserializable\index.php:0
    0.0080    1040840   2. App\Test->run() S:\VCS\Git\parallel-nonserializable\index.php:7
    0.0280    2138632   3. Amp\Promise\wait($promise = class Amp\Internal\PrivatePromise { private $promise = class Amp\Promise@anonymous { private $resolved = TRUE; private $result = class Amp\Failure { ... }; private $onResolved = NULL; private $resolutionTrace = NULL } }) S:\VCS\Git\parallel-nonserializable\src\Test.php:28
```
