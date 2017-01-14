<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use function Clue\React\Block\await;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;

final class Client
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
        $this->client = new AsyncClient($this->loop, $auth);
    }

    public function user(string $user): UserInterface
    {
        return await(
            $this->client->user($user),
            $this->loop
        );
    }
}
