<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
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
    private $client;

    public function __construct(AuthenticationInterface $auth)
    {
        $this->loop = Factory::create();
        $this->client = AsyncClient::create($this->loop, $auth);
    }

    public function user(string $user): UserInterface
    {
        return await(
            $this->client->user($user),
            $this->loop
        );
    }

    public function getRateLimitState(): RateLimitState
    {
        return $this->client->getRateLimitState();
    }
}
