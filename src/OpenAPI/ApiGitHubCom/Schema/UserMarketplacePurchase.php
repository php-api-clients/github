<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserMarketplacePurchase
{
    public const SCHEMA_TITLE = 'User Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    private string $billing_cycle;
    private $next_billing_date;
    private $unit_count;
    private bool $on_free_trial;
    private $free_trial_ends_on;
    private $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceAccount::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceAccount $account;
    /**
     * Marketplace Listing Plan
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan $plan;
    public function billing_cycle() : string
    {
        return $this->billing_cycle;
    }
    public function next_billing_date()
    {
        return $this->next_billing_date;
    }
    public function unit_count()
    {
        return $this->unit_count;
    }
    public function on_free_trial() : bool
    {
        return $this->on_free_trial;
    }
    public function free_trial_ends_on()
    {
        return $this->free_trial_ends_on;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function account() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceAccount
    {
        return $this->account;
    }
    /**
     * Marketplace Listing Plan
     */
    public function plan() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan
    {
        return $this->plan;
    }
}
