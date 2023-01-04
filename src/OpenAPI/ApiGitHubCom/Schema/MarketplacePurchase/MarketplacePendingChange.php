<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

final class MarketplacePendingChange
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"is_installed":{"type":"boolean"},"effective_date":{"type":"string"},"unit_count":{"type":["integer","null"]},"id":{"type":"integer"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_TITLE = 'MarketplacePurchase\\MarketplacePendingChange';
    public const SCHEMA_DESCRIPTION = '';
    private bool $is_installed;
    private string $effective_date;
    private ?int $unit_count;
    private int $id;
    /**
     * Marketplace Listing Plan
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan $plan;
    public function is_installed() : bool
    {
        return $this->is_installed;
    }
    public function effective_date() : string
    {
        return $this->effective_date;
    }
    public function unit_count() : ?int
    {
        return $this->unit_count;
    }
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Marketplace Listing Plan
     */
    public function plan() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan
    {
        return $this->plan;
    }
}
