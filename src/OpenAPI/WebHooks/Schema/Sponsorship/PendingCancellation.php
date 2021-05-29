<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Sponsorship;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class PendingCancellation
{
    public const SCHEMA_TITLE       = 'sponsorship pending_cancellation event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $sponsorship      = [];
    /**
     * The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.
     */
    private ?string $effective_date = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function sponsorship(): array
    {
        return $this->sponsorship;
    }

    /**
     * The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.
     */
    public function effective_date(): ?string
    {
        return $this->effective_date;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }
}
