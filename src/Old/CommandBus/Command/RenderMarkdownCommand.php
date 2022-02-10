<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use React\Stream\ReadableStreamInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\RenderMarkdownHandler")
 */
final class RenderMarkdownCommand
{
    private ReadableStreamInterface $stream;

    private string $mode;

    private string $context;

    public function __construct(
        ReadableStreamInterface $stream,
        string $mode,
        string $context
    ) {
        $this->stream  = $stream;
        $this->mode    = $mode;
        $this->context = $context;
    }

    public function getStream(): ReadableStreamInterface
    {
        return $this->stream;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function getContext(): string
    {
        return $this->context;
    }
}
