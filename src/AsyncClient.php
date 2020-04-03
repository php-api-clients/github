<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Options;
use ApiClients\Foundation\Resource\ResourceInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use React\EventLoop\LoopInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use React\Stream\ReadableStreamInterface;
use Rx\Observable;
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
     * @param ClientInterface $client
     * @param RateLimitState  $rateLimitState
     */
    private function __construct(ClientInterface $client, RateLimitState $rateLimitState)
    {
        $this->client = $client;
        $this->rateLimitState = $rateLimitState;
    }

    /**
     * @param  LoopInterface           $loop
     * @param  AuthenticationInterface $auth
     * @param  array                   $options
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
     * @internal
     * @param  ClientInterface $client
     * @param  RateLimitState  $rateLimitState
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

    /**
     * @param  string           $user
     * @return PromiseInterface
     */
    public function user(string $user): PromiseInterface
    {
        return $this->client->handle(new Command\UserCommand($user));
    }

    /**
     * @param  string           $organization
     * @return PromiseInterface
     */
    public function organization(string $organization): PromiseInterface
    {
        return $this->client->handle(new Command\OrganizationCommand($organization));
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

    /**
     * @return RateLimitState
     */
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
