<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserMarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"User Marketplace Purchase","required":["billing_cycle","next_billing_date","unit_count","updated_at","on_free_trial","free_trial_ends_on","account","plan"],"type":"object","properties":{"billing_cycle":{"type":"string","examples":["monthly"]},"next_billing_date":{"type":["string","null"],"format":"date-time","examples":["2017-11-11T00:00:00Z"]},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean","examples":[true]},"free_trial_ends_on":{"type":["string","null"],"format":"date-time","examples":["2017-11-11T00:00:00Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2017-11-02T01:12:12Z"]},"account":{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}},"description":"User Marketplace Purchase"}';
    public const SCHEMA_TITLE = 'User Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    private string $billing_cycle;
    private ?string $next_billing_date;
    private ?int $unit_count;
    private bool $on_free_trial;
    private ?string $free_trial_ends_on;
    private ?string $updated_at;
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
    public function next_billing_date() : ?string
    {
        return $this->next_billing_date;
    }
    public function unit_count() : ?int
    {
        return $this->unit_count;
    }
    public function on_free_trial() : bool
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
