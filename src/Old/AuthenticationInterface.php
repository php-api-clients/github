<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

interface AuthenticationInterface
{
    public function getOptions(): array;
}
