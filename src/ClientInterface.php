<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use function Clue\React\Block\await;

interface ClientInterface
{
    public function user(string $user): UserInterface;

    public function getRateLimitState(): RateLimitState;
}
