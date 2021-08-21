```bash
php index.php
```

```
PHP Deprecated:  Return type of Amp\Parallel\Worker\BasicEnvironment::offsetGet($key) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\BasicEnvironment.php on line 164

Deprecated: Return type of Amp\Parallel\Worker\BasicEnvironment::offsetGet($key) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\BasicEnvironment.php on line 164
PHP Fatal error:  Uncaught Error: Event loop suspended or exited without resolving the promise in S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php:83
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\ProcessOutputStream.php(78): Amp\await(Object(Amp\Internal\PrivatePromise))
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php(190): Amp\Process\ProcessOutputStream->write('`\x7FpW\x94\x18\xA7\x80GE\xB3`\xD1h\xAD...')
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\Internal\WorkerProcess.php(37): Amp\Parallel\Context\Process->start()
#3 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\TaskWorker.php(48): Amp\Parallel\Worker\Internal\WorkerProcess->start()
#4 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\WorkerProcess.php(37): Amp\Parallel\Worker\TaskWorker->__construct(Object(Amp\Parallel\Worker\Internal\WorkerProcess))
#5 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultWorkerFactory.php(53): Amp\Parallel\Worker\WorkerProcess->__construct('Amp\\Parallel\\Wo...', Array, NULL)
#6 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(243): Amp\Parallel\Worker\DefaultWorkerFactory->create()
#7 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(150): Amp\Parallel\Worker\DefaultPool->pull()
#8 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(44): Amp\Parallel\Worker\DefaultPool->enqueue(Object(Amp\Parallel\Worker\CallableTask), NULL)
#9 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(57): Amp\Parallel\Worker\enqueue(Object(Amp\Parallel\Worker\CallableTask))
#10 S:\VCS\Git\parallel-nonserializable\src\Test.php(24): Amp\Parallel\Worker\enqueueCallable(Array, 1)
#11 S:\VCS\Git\parallel-nonserializable\index.php(7): App\Test->run()
#12 {main}

Next Amp\Parallel\Context\ContextException: Starting the process failed in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php:197
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\Internal\WorkerProcess.php(37): Amp\Parallel\Context\Process->start()
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\TaskWorker.php(48): Amp\Parallel\Worker\Internal\WorkerProcess->start()
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\WorkerProcess.php(37): Amp\Parallel\Worker\TaskWorker->__construct(Object(Amp\Parallel\Worker\Internal\WorkerProcess))
#3 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultWorkerFactory.php(53): Amp\Parallel\Worker\WorkerProcess->__construct('Amp\\Parallel\\Wo...', Array, NULL)
#4 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(243): Amp\Parallel\Worker\DefaultWorkerFactory->create()
#5 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(150): Amp\Parallel\Worker\DefaultPool->pull()
#6 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(44): Amp\Parallel\Worker\DefaultPool->enqueue(Object(Amp\Parallel\Worker\CallableTask), NULL)
#7 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(57): Amp\Parallel\Worker\enqueue(Object(Amp\Parallel\Worker\CallableTask))
#8 S:\VCS\Git\parallel-nonserializable\src\Test.php(24): Amp\Parallel\Worker\enqueueCallable(Array, 1)
#9 S:\VCS\Git\parallel-nonserializable\index.php(7): App\Test->run()
#10 {main}
  thrown in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php on line 197

Fatal error: Uncaught Error: Event loop suspended or exited without resolving the promise in S:\VCS\Git\parallel-nonserializable\vendor\amphp\amp\lib\functions.php:83
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\ProcessOutputStream.php(78): Amp\await(Object(Amp\Internal\PrivatePromise))
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php(190): Amp\Process\ProcessOutputStream->write('`\x7FpW\x94\x18\xA7\x80GE\xB3`\xD1h\xAD...')
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\Internal\WorkerProcess.php(37): Amp\Parallel\Context\Process->start()
#3 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\TaskWorker.php(48): Amp\Parallel\Worker\Internal\WorkerProcess->start()
#4 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\WorkerProcess.php(37): Amp\Parallel\Worker\TaskWorker->__construct(Object(Amp\Parallel\Worker\Internal\WorkerProcess))
#5 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultWorkerFactory.php(53): Amp\Parallel\Worker\WorkerProcess->__construct('Amp\\Parallel\\Wo...', Array, NULL)
#6 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(243): Amp\Parallel\Worker\DefaultWorkerFactory->create()
#7 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(150): Amp\Parallel\Worker\DefaultPool->pull()
#8 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(44): Amp\Parallel\Worker\DefaultPool->enqueue(Object(Amp\Parallel\Worker\CallableTask), NULL)
#9 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(57): Amp\Parallel\Worker\enqueue(Object(Amp\Parallel\Worker\CallableTask))
#10 S:\VCS\Git\parallel-nonserializable\src\Test.php(24): Amp\Parallel\Worker\enqueueCallable(Array, 1)
#11 S:\VCS\Git\parallel-nonserializable\index.php(7): App\Test->run()
#12 {main}

Next Amp\Parallel\Context\ContextException: Starting the process failed in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php:197
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\Internal\WorkerProcess.php(37): Amp\Parallel\Context\Process->start()
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\TaskWorker.php(48): Amp\Parallel\Worker\Internal\WorkerProcess->start()
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\WorkerProcess.php(37): Amp\Parallel\Worker\TaskWorker->__construct(Object(Amp\Parallel\Worker\Internal\WorkerProcess))
#3 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultWorkerFactory.php(53): Amp\Parallel\Worker\WorkerProcess->__construct('Amp\\Parallel\\Wo...', Array, NULL)
#4 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(243): Amp\Parallel\Worker\DefaultWorkerFactory->create()
#5 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\DefaultPool.php(150): Amp\Parallel\Worker\DefaultPool->pull()
#6 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(44): Amp\Parallel\Worker\DefaultPool->enqueue(Object(Amp\Parallel\Worker\CallableTask), NULL)
#7 S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Worker\functions.php(57): Amp\Parallel\Worker\enqueue(Object(Amp\Parallel\Worker\CallableTask))
#8 S:\VCS\Git\parallel-nonserializable\src\Test.php(24): Amp\Parallel\Worker\enqueueCallable(Array, 1)
#9 S:\VCS\Git\parallel-nonserializable\index.php(7): App\Test->run()
#10 {main}
  thrown in S:\VCS\Git\parallel-nonserializable\vendor\amphp\parallel\lib\Context\Process.php on line 197
PHP Fatal error:  Uncaught TypeError: fclose(): supplied resource is not a valid stream resource in S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php:221
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php(221): fclose(Resource id #87)
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php(201): Amp\Process\Internal\Windows\Runner->free(Object(Amp\Process\Internal\Windows\Handle))
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Process.php(77): Amp\Process\Internal\Windows\Runner->destroy(Object(Amp\Process\Internal\Windows\Handle))
#3 [internal function]: Amp\Process\Process->__destruct()
#4 {main}
  thrown in S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php on line 221

Fatal error: Uncaught TypeError: fclose(): supplied resource is not a valid stream resource in S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php:221
Stack trace:
#0 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php(221): fclose(Resource id #87)
#1 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php(201): Amp\Process\Internal\Windows\Runner->free(Object(Amp\Process\Internal\Windows\Handle))
#2 S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Process.php(77): Amp\Process\Internal\Windows\Runner->destroy(Object(Amp\Process\Internal\Windows\Handle))
#3 [internal function]: Amp\Process\Process->__destruct()
#4 {main}
  thrown in S:\VCS\Git\parallel-nonserializable\vendor\amphp\process\lib\Internal\Windows\Runner.php on line 221
```
