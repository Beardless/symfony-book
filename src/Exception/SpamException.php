<?php

namespace App\Exception;

class SpamException extends \RuntimeException
{
  public function __construct(string $message = "Blatant spam, go away!", int $code = 0, \Throwable $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }
}
