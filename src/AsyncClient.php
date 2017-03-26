<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Options;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;
use Rx\Scheduler;

final class AsyncClient implements AsyncClientInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var RateLimitState
     */
    private $rateLimitState;

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
        $rateLimitState = new RateLimitState();
        $options[Options::CONTAINER_DEFINITIONS][RateLimitState::class] = $rateLimitState;
        $client = Factory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        return new self($client, $rateLimitState);
    }

    /**
     * @param ClientInterface $client
     * @param RateLimitState $rateLimitState
     */
    private function __construct(ClientInterface $client, RateLimitState $rateLimitState)
    {
        $this->client = $client;
        $this->rateLimitState = $rateLimitState;
    }

    public function user(string $user): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand($user));
    }

    public function whoami(): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand());
    }

    public function myOrganizations(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\MyOrganizationsCommand()));
    }

    /**
     * @return RateLimitState
     */
    public function getRateLimitState(): RateLimitState
    {
        return clone $this->rateLimitState;
    }
}
