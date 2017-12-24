<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use React\Stream\ReadableStreamInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\RenderMarkdownHandler")
 */
final class RenderMarkdownCommand
{
    /**
     * @var ReadableStreamInterface
     */
    private $stream;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var string
     */
    private $context;

    /**
     * @param ReadableStreamInterface $stream
     * @param string                  $mode
     * @param string                  $context
     */
    public function __construct(
        ReadableStreamInterface $stream,
        string $mode,
        string $context
    ) {
        $this->stream = $stream;
        $this->mode = $mode;
        $this->context = $context;
    }

    /**
     * @return ReadableStreamInterface
     */
    public function getStream(): ReadableStreamInterface
    {
        return $this->stream;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}
