<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class AsyncClient
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param LoopInterface $loop
     * @param AuthenticationInterface $auth
     * @param array $options
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $options = ApiSettings::getOptions($auth, $options, 'Async');
        $client = Factory::create($loop, $options);
        return new self($client);
    }

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
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
