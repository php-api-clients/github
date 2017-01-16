<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Client\Github\CommandBus\Command\RepositoryCommand;
use ApiClients\Client\Github\Resource\Contents\DirectoryInterface;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use ApiClients\Client\Github\Resource\Repository as BaseRepository;
use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\JsonEncodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\RequestCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use ApiClients\Foundation\Transport\Response;
use GuzzleHttp\Psr7\Request;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use Rx\React\Promise;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;

class Repository extends BaseRepository
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RepositoryCommand(...(explode('/', $this->fullName())))
        );
    }

    public function labels(): ObservableInterface
    {
        return $this->getCommandBus()->handle(
            new IteratePagesCommand('repos/' . $this->fullName() . '/labels')
        )->flatMap(function ($response) {
            return Observable::fromArray($response);
        })->map(function ($label) {
            return $this->getCommandBus()->handle(new HydrateCommand('Label', $label));
        });
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
        return Promise::toObservable($this->handleCommand(
            new SimpleRequestCommand('repos/' . $this->fullName() . '/contents/')
        ))->flatMap(function ($contents) {
            return Observable::fromArray($contents->getBody()->getJson());
        })->flatMap(function ($content) {
            if ($content['type'] === 'file') {
                return Promise::toObservable($this->handleCommand(
                    new HydrateCommand(FileInterface::HYDRATE_CLASS, $content)
                ));
            }

            return Promise::toObservable($this->handleCommand(
                new HydrateCommand(DirectoryInterface::HYDRATE_CLASS, $content)
            ));
        });
    }
}
