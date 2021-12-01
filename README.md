```bash
php index.php
```

```
PHP Fatal error:  Uncaught Error: Scheduler suspended or exited unexpectedly in S:\VCS\My\parallel-nonserializable\vendor\revolt\event-loop\src\EventLoop\Internal\DriverSuspension.php:85
Stack trace:
#0 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Internal\FutureIterator.php(128): Revolt\EventLoop\Internal\DriverSuspension->suspend()
#1 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Future.php(56): Amp\Internal\FutureIterator->consume()
#2 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Future\functions.php(132): Amp\Future::iterate(Array, NULL)
#3 S:\VCS\My\parallel-nonserializable\src\Test.php(29): Amp\Future\all(Array)
#4 S:\VCS\My\parallel-nonserializable\index.php(7): App\Test->run()
#5 {main}
  thrown in S:\VCS\My\parallel-nonserializable\vendor\revolt\event-loop\src\EventLoop\Internal\DriverSuspension.php on line 85

Fatal error: Uncaught Error: Scheduler suspended or exited unexpectedly in S:\VCS\My\parallel-nonserializable\vendor\revolt\event-loop\src\EventLoop\Internal\DriverSuspension.php:85
Stack trace:
#0 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Internal\FutureIterator.php(128): Revolt\EventLoop\Internal\DriverSuspension->suspend()
#1 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Future.php(56): Amp\Internal\FutureIterator->consume()
#2 S:\VCS\My\parallel-nonserializable\vendor\amphp\amp\lib\Future\functions.php(132): Amp\Future::iterate(Array, NULL)
#3 S:\VCS\My\parallel-nonserializable\src\Test.php(29): Amp\Future\all(Array)
#4 S:\VCS\My\parallel-nonserializable\index.php(7): App\Test->run()
#5 {main}
  thrown in S:\VCS\My\parallel-nonserializable\vendor\revolt\event-loop\src\EventLoop\Internal\DriverSuspension.php on line 85

```
