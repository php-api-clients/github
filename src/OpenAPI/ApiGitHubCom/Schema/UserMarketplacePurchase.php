<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserMarketplacePurchase
{
    public const SCHEMA_TITLE = 'User Marketplace Purchase';
    public const SPL_HASH = '00000000252f4ccf0000000029de5079';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    private ?string $billing_cycle = null;
    private ?string $next_billing_date = null;
    private ?int $unit_count = null;
    private ?bool $on_free_trial = null;
    private ?string $free_trial_ends_on = null;
    private ?string $updated_at = null;
    private ?object $account = null;
    /**
     * Marketplace Listing Plan
     */
    private ?object $plan = null;
    public function billing_cycle() : ?string
    {
        return $this->billing_cycle;
    }
    public function next_billing_date() : ?string
    {
        return $this->next_billing_date;
    }
    public function unit_count() : ?int
    {
        return $this->unit_count;
    }
    public function on_free_trial() : ?bool
    {
        return $this->on_free_trial;
    }
    public function free_trial_ends_on() : ?string
    {
        return $this->free_trial_ends_on;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function account() : ?object
    {
        return $this->account;
    }
    public function plan() : ?object
    {
        return $this->plan;
    }
}
