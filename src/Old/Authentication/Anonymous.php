<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Authentication;

use ApiClients\Client\Github\AuthenticationInterface;

final class Anonymous implements AuthenticationInterface
{
    public function getOptions(): array
    {
        return [];
    }
}
