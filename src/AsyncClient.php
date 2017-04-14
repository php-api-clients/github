<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\Scheduler;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

final class AsyncClient implements AsyncClientInterface
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

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        return new self($client);
    }

    /**
     * @internal
     * @param ClientInterface $client
     * @return AsyncClient
     */
    public static function createFromClient(ClientInterface $client): self
    {
        return new self($client);
    }

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $user
     * @return PromiseInterface
     */
    public function user(string $user): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand($user));
    }

    /**
     * @return PromiseInterface
     */
    public function whoami(): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand());
    }

    /**
     * @return Observable
     */
    public function myOrganizations(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\MyOrganizationsCommand()));
    }
}
