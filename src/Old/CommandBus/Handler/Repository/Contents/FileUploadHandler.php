<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\Contents\FileUploadCommand;
use ApiClients\Client\Github\Resource\Contents\FileOperationInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use Clue\React\Buzz\Message\ReadableBodyStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Request;
use WyriHaximus\React\Stream\Base64\WritableStreamBase64Encode;
use WyriHaximus\React\Stream\Json\JsonStream;

final class FileUploadHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    private LoopInterface $loop;

    public function __construct(RequestService $requestService, Hydrator $hydrator, LoopInterface $loop)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
        $this->loop           = $loop;
    }

    public function handle(FileUploadCommand $command): PromiseInterface
    {
        $stream = new JsonStream();

        $this->loop->futureTick(function () use ($stream, $command): void {
            $fileStream          = new ThroughStream();
            $decoratedFileStream = new WritableStreamBase64Encode($fileStream);
            $stream->write('message', $command->getCommitMessage());
            $stream->write('content', $fileStream);
            if ($command->getSha() !== '') {
                $stream->write('sha', $command->getSha());
            }

            if ($command->getBranch() !== '') {
                $stream->write('branch', $command->getBranch());
            }

            $stream->end();

            $this->loop->futureTick(static function () use ($decoratedFileStream, $command): void {
                $command->getStream()->pipe($decoratedFileStream);
            });
        });

        return $this->requestService->request(
            new Request(
                'PUT',
                $command->getUrl(),
                [],
                new ReadableBodyStream($stream)
            )
        )->then(function ($operation) {
            return $this->hydrator->hydrate(
                FileOperationInterface::HYDRATE_CLASS,
                $operation->getBody()->getParsedContents()
            );
        });
    }
}
