<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMarketplacePurchasePendingChangeCancelled;

final class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}},"billing_cycle":{"type":"string"},"free_trial_ends_on":{"type":["null"]},"next_billing_date":{"type":["string","null"]},"on_free_trial":{"type":"boolean"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}},"unit_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Account::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Account $account;
    private string $billing_cycle;
    private $free_trial_ends_on;
    private $next_billing_date;
    private bool $on_free_trial;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Plan::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Plan $plan;
    private int $unit_count;
    public function account() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Account
    {
        return $this->account;
    }
    public function billing_cycle() : string
    {
        return $this->billing_cycle;
    }
    public function free_trial_ends_on()
    {
        return $this->free_trial_ends_on;
    }
    public function next_billing_date()
    {
        return $this->next_billing_date;
    }
    public function on_free_trial() : bool
    {
        return $this->on_free_trial;
    }
    public function plan() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase\Plan
    {
        return $this->plan;
    }
    public function unit_count() : int
    {
        return $this->unit_count;
    }
}
