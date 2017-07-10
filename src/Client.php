<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Factory as FoundationClientFactory;
use ApiClients\Foundation\Options;
use ApiClients\Foundation\Resource\ResourceInterface;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use Rx\Scheduler;
use function Clue\React\Block\await;

final class Client implements ClientInterface
{
    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @var AsyncClient
     */
    private $asyncClient;

    /**
     * @param LoopInterface $loop
     * @param AsyncClient   $client
     */
    private function __construct(LoopInterface $loop, AsyncClient $client)
    {
        $this->loop = $loop;
        $this->asyncClient = $client;
    }

    /**
     * @param  AuthenticationInterface $auth
     * @param  array                   $options
     * @return Client
     */
    public static function create(
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $loop = Factory::create();
        $options = ApiSettings::getOptions($auth, $options, 'Sync');
        $rateLimitState = new RateLimitState();
        $options[Options::CONTAINER_DEFINITIONS][RateLimitState::class] = $rateLimitState;
        $client = FoundationClientFactory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        $asyncClient = AsyncClient::createFromClient($client, $rateLimitState);

        return new self($loop, $asyncClient);
    }

    public function hydrate(string $resource): ResourceInterface
    {
        return await(
            $this->asyncClient->hydrate($resource),
            $this->loop
        );
    }

    public function extract(ResourceInterface $resource): string
    {
        return await(
            $this->asyncClient->extract($resource),
            $this->loop
        );
    }

    /**
     * @param  string        $user
     * @return UserInterface
     */
    public function user(string $user): UserInterface
    {
        return await(
            $this->asyncClient->user($user),
            $this->loop
        );
    }

    /**
     * @return RateLimitState
     */
    public function getRateLimitState(): RateLimitState
    {
        return $this->asyncClient->getRateLimitState();
    }
}
