<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;

final readonly class BearerToken implements AuthenticationInterface
{
    public function __construct(private string $token)
    {
    }

    public function authHeader(): string
    {
        return 'Bearer ' . $this->token;
    }
}
