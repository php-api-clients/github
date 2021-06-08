<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Sponsorship;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class TierChanged
{
    public const SCHEMA_TITLE       = 'sponsorship tier_changed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private array $sponsorship = [];
    private array $changes     = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;

    public function action(): string
    {
        return $this->action;
    }

    public function sponsorship(): array
    {
        return $this->sponsorship;
    }

    public function changes(): array
    {
        return $this->changes;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
