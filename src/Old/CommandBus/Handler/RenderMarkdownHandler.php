<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RenderMarkdownCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use Clue\React\Buzz\Message\ReadableBodyStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Request;
use WyriHaximus\React\Stream\Json\JsonStream;

final class RenderMarkdownHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @param RequestService $requestService
     * @param LoopInterface  $loop
     */
    public function __construct(RequestService $requestService, LoopInterface $loop)
    {
        $this->requestService = $requestService;
        $this->loop = $loop;
    }

    /**
     * @param  RenderMarkdownCommand $command
     * @return PromiseInterface
     */
    public function handle(RenderMarkdownCommand $command): PromiseInterface
    {
        $stream = new JsonStream();

        $this->loop->futureTick(function () use ($stream, $command) {
            $markdownStream = new ThroughStream();
            $stream->write('text', $markdownStream);
            if ($command->getMode() !== '') {
                $stream->write('mode', $command->getMode());
            }
            if ($command->getContext() !== '') {
                $stream->write('context', $command->getContext());
            }
            $stream->end();

            $this->loop->futureTick(function () use ($markdownStream, $command) {
                $command->getStream()->pipe($markdownStream);
            });
        });

        return $this->requestService->request(
            new Request(
                'POST',
                '/markdown',
                [],
                new ReadableBodyStream($stream)
            )
        )->then(function ($markdown) {
            return $markdown->getBody();
        });
    }
}
