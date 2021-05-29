<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Sponsorship;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Cancelled
{
    public const SCHEMA_TITLE       = 'sponsorship cancelled event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private array $sponsorship = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender = [];

    public function action(): string
    {
        return $this->action;
    }

    public function sponsorship(): array
    {
        return $this->sponsorship;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}