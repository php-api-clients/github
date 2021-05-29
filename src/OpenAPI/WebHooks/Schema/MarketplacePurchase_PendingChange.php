<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class MarketplacePurchase_PendingChange
{
    public const SCHEMA_TITLE       = 'marketplace_purchase pending_change event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private ?string $effective_date = null;
    private array $sender           = [];
    private $marketplace_purchase;
    private array $previous_marketplace_purchase = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function effective_date(): ?string
    {
        return $this->effective_date;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function marketplace_purchase()
    {
        return $this->marketplace_purchase;
    }

    public function previous_marketplace_purchase(): array
    {
        return $this->previous_marketplace_purchase;
    }
}
