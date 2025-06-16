<?php

namespace Kunststube\Rison;

use Exception;

class RisonParseErrorException extends \RuntimeException {

    protected $rison;

    public function __construct($rison, $message, $code = 0, ?Exception $previous = null) {
        $this->rison = $rison;
        parent::__construct($message, $code, $previous);
    }

    public function getRison() {
        return $this->rison;
    }

}
