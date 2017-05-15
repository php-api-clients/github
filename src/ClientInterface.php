<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;

interface ClientInterface
{
    public function user(string $user): UserInterface;

    public function getRateLimitState(): RateLimitState;
}
