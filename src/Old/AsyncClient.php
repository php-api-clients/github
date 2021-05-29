<?php

declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Options;
use ApiClients\Foundation\Resource\ResourceInterface;
use React\EventLoop\LoopInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use React\Stream\ReadableStreamInterface;
use Rx\Observable;
use Rx\Scheduler;
use Throwable;

use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

final class AsyncClient implements AsyncClientInterface
{
    private ClientInterface $client;

    private RateLimitState $rateLimitState;

    private function __construct(ClientInterface $client, RateLimitState $rateLimitState)
    {
        $this->client         = $client;
        $this->rateLimitState = $rateLimitState;
    }

    /**
     * @param  array $options
     *
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $options                                                        = ApiSettings::getOptions($auth, $options, 'Async');
        $rateLimitState                                                 = new RateLimitState();
        $options[Options::CONTAINER_DEFINITIONS][RateLimitState::class] = $rateLimitState;
        $client                                                         = Factory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(static function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (Throwable $t) {
        }

        return new self($client, $rateLimitState);
    }

    /**
     * @internal
     *
     * @return AsyncClient
     */
    public static function createFromClient(ClientInterface $client, RateLimitState $rateLimitState): self
    {
        return new self($client, $rateLimitState);
    }

    public function hydrate(string $resource): CancellablePromiseInterface
    {
        return $this->client->hydrate($resource);
    }

    public function extract(ResourceInterface $resource): CancellablePromiseInterface
    {
        return $this->client->extract($resource);
    }

    public function meta(): PromiseInterface
    {
        return $this->client->handle(new Command\MetaCommand());
    }

    public function user(string $user): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand($user));
    }

    public function organization(string $organization): PromiseInterface
    {
        return $this->client->handle(new Command\OrganizationCommand($organization));
    }

    public function whoami(): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand());
    }

    public function emojis(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\EmojisCommand()));
    }

    public function myOrganizations(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\MyOrganizationsCommand()));
    }

    public function licenses(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\LicensesCommand()));
    }

    public function watching(): Observable
    {
        return unwrapObservableFromPromise($this->client->handle(new Command\WatchingCommand()));
    }

    public function getRateLimitState(): RateLimitState
    {
        return clone $this->rateLimitState;
    }

    public function rateLimit(): PromiseInterface
    {
        return $this->client->handle(new Command\RateLimitCommand());
    }

    public function app(): PromiseInterface
    {
        return $this->client->handle(new Command\AppCommand());
    }

    public function renderMarkdown(
        ReadableStreamInterface $stream,
        string $mode = 'markdown',
        string $context = ''
    ): PromiseInterface {
        $stream->pause();

        return $this->client->handle(new Command\RenderMarkdownCommand(
            $stream,
            $mode,
            $context
        ));
    }
}
