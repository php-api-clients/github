<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class MarketplacePurchase
{
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = '';
    private array $account = array();
    private string $billing_cycle;
    private int $unit_count;
    private bool $on_free_trial;
    private $free_trial_ends_on;
    private ?string $next_billing_date = null;
    private array $plan = array();
    public function account() : array
    {
        return $this->account;
    }
    public function billing_cycle() : string
    {
        return $this->billing_cycle;
    }
    public function unit_count() : int
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
    public function next_billing_date() : ?string
    {
        return $this->next_billing_date;
    }
    public function plan() : array
    {
        return $this->plan;
    }
}
