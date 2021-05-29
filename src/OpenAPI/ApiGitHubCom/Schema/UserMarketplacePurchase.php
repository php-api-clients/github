<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserMarketplacePurchase
{
    public const SCHEMA_TITLE       = 'User Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    private string $billing_cycle;
    private string $next_billing_date;
    private int $unit_count;
    private bool $on_free_trial;
    private string $free_trial_ends_on;
    private string $updated_at;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceAccount::class) */
    private MarketplaceAccount $account;
    /**
     * Marketplace Listing Plan
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan::class)
     */
    private MarketplaceListingPlan $plan;

    public function billing_cycle(): string
    {
        return $this->billing_cycle;
    }

    public function next_billing_date(): string
    {
        return $this->next_billing_date;
    }

    public function unit_count(): int
    {
        return $this->unit_count;
    }

    public function on_free_trial(): bool
    {
        return $this->on_free_trial;
    }

    public function free_trial_ends_on(): string
    {
        return $this->free_trial_ends_on;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function account(): MarketplaceAccount
    {
        return $this->account;
    }

    /**
     * Marketplace Listing Plan
     */
    public function plan(): MarketplaceListingPlan
    {
        return $this->plan;
    }
}
