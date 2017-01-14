<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Foundation\Client;
use ApiClients\Foundation\Events\CommandLocatorEvent;
use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\JsonDecodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use ApiClients\Foundation\Transport\Response;
use League\Event\EmitterInterface;
use League\Tactician\CommandBus;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use ApiClients\Foundation\Factory;
use function React\Promise\resolve;
use ApiClients\Client\Github\CommandBus\Command;

final class AsyncClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var CommandBus
     */
    protected $commandBus;

    public function __construct(LoopInterface $loop, AuthenticationInterface $auth, array $options = [], Client $transport = null)
    {
        $options = ApiSettings::getOptions($auth, $options, 'Async');
        $this->client = Factory::create($loop, $options);
    }

    public function user(string $user): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand($user));
    }

    public function whoami(): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand());
    }
}
