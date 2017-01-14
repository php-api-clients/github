<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\JsonEncodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\RequestCommand;
use ApiClients\Foundation\Transport\Response;
use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Client\Github\Resource\Repository as BaseRepository;
use GuzzleHttp\Psr7\Request;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;

class Repository extends BaseRepository
{
    public function refresh() : Repository
    {
        return $this->wait($this->callAsync('refresh'));
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
}
