<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Sponsorship_PendingCancellation
{
    public const SCHEMA_TITLE       = 'sponsorship pending_cancellation event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $sponsorship      = [];
    /**
     * The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.
     */
    private ?string $effective_date = null;
    private array $sender           = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function sponsorship(): array
    {
        return $this->sponsorship;
    }

    public function effective_date(): ?string
    {
        return $this->effective_date;
    }

    public function sender(): array
    {
        return $this->sender;
    }
}
