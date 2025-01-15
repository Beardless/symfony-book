<?php

namespace App\Message;

class CommentMessage
{
  public function __construct(
    public int $id,
    public array $context = [],
  ) {}

  public function getId(): int
  {
    return $this->id;
  }

  public function getContext(): array
  {
    return $this->context;
  }
}
