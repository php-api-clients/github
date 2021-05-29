<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\MarketplacePurchase;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\MarketplacePurchase;

final class Cancelled
{
    public const SCHEMA_TITLE       = 'marketplace_purchase cancelled event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private string $effective_date;
    private array $sender = [];
    private $marketplace_purchase;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\MarketplacePurchase::class) */
    private MarketplacePurchase $previous_marketplace_purchase = [];

    public function action(): string
    {
        return $this->action;
    }

    public function effective_date(): string
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

    public function previous_marketplace_purchase(): MarketplacePurchase
    {
        return $this->previous_marketplace_purchase;
    }
}
