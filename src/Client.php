<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Factory as FoundationClientFactory;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use function Clue\React\Block\await;
use Rx\Scheduler;

final class Client implements ClientInterface
{
    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @var AsyncClient
     */
    private $client;

    /**
     * @param AuthenticationInterface $auth
     * @param array $options
     * @return Client
     */
    public static function create(
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $loop = Factory::create();
        $options = ApiSettings::getOptions($auth, $options, 'Sync');
        $client = FoundationClientFactory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        $asyncClient = AsyncClient::createFromClient($client);

        return new self($loop, $asyncClient);
    }

    /**
     * @param LoopInterface $loop
     * @param AsyncClient $client
     */
    private function __construct(LoopInterface $loop, AsyncClient $client)
    {
        $this->loop = $loop;
        $this->client = $client;
    }

    /**
     * @param string $user
     * @return UserInterface
     */
    public function user(string $user): UserInterface
    {
        return await(
            $this->client->user($user),
            $this->loop
        );
    }
}
