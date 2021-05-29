<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Sponsorship_TierChanged
{
    public const SCHEMA_TITLE       = 'sponsorship tier_changed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $sponsorship      = [];
    private array $changes          = [];
    private array $sender           = [];

    public function action(): ?string
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

    public function sender(): array
    {
        return $this->sender;
    }
}
