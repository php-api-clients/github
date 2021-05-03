<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserMarketplacePurchase
{
    public const SCHEMA_TITLE = 'User Marketplace Purchase';
    public const SPL_HASH = '000000002070133b0000000042193899';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    private string $billing_cycle;
    private string $next_billing_date;
    private int $unit_count;
    private bool $on_free_trial;
    private string $free_trial_ends_on;
    private string $updated_at;
    private object $account;
    /**
     * Marketplace Listing Plan
     */
    private object $plan;
    public function billing_cycle() : string
    {
        return $this->billing_cycle;
    }
    public function next_billing_date() : string
    {
        return $this->next_billing_date;
    }
    public function unit_count() : int
    {
        return $this->unit_count;
    }
    public function on_free_trial() : bool
    {
        return $this->on_free_trial;
    }
    public function free_trial_ends_on() : string
    {
        return $this->free_trial_ends_on;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function account() : object
    {
        return $this->account;
    }
    public function plan() : object
    {
        return $this->plan;
    }
}
