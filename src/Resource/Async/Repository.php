<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\LabelsCommand;
use ApiClients\Client\Github\Resource\Repository as BaseRepository;
use ApiClients\Foundation\Transport\CommandBus\Command\JsonEncodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\RequestCommand;
use ApiClients\Foundation\Transport\Response;
use GuzzleHttp\Psr7\Request;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;

class Repository extends BaseRepository
{
    public function refresh() : PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function labels(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new LabelsCommand($this->fullName())
        ));
    }

    public function addLabel(string $name, string $colour): PromiseInterface
    {
        return $this->getCommandBus()->handle(
            new JsonEncodeCommand([])
        )->then(function (string $json) {
            return $this->getCommandBus()->handle(
                new RequestCommand(
                    new Request(
                        'POST',
                        'repos/' . $this->fullName() . '/labels',
                        [],
                        $json
                    )
                )
            );
        })->then(function (Response $response) {
            var_export($response->getBody());
        });
    }

    public function contents(): Observable
    {
        return unwrapObservableFromPromise(
            $this->handleCommand(
                new ContentsCommand($this->fullName())
            )
        );
    }
}
