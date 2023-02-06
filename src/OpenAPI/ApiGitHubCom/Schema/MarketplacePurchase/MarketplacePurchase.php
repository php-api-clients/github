<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

final class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billing_cycle":{"type":"string"},"next_billing_date":{"type":["string","null"]},"is_installed":{"type":"boolean"},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":["string","null"]},"updated_at":{"type":"string"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_EXAMPLE = '{"plan":{"url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313","accounts_url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts","id":1313,"number":3,"name":"Pro","description":"A professional-grade CI solution","monthly_price_in_cents":1099,"yearly_price_in_cents":11870,"price_model":"FLAT_RATE","has_free_trial":true,"state":"published","bullets":"11 concurrent builds"}}';
    public const SCHEMA_TITLE = 'MarketplacePurchase\\MarketplacePurchase';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $billing_cycle;
    public readonly ?string $next_billing_date;
    public readonly bool $is_installed;
    public readonly ?int $unit_count;
    public readonly bool $on_free_trial;
    public readonly ?string $free_trial_ends_on;
    public readonly string $updated_at;
    /**
     * Marketplace Listing Plan
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan $plan;
    public function __construct(string $billing_cycle, string $next_billing_date, bool $is_installed, int $unit_count, bool $on_free_trial, string $free_trial_ends_on, string $updated_at, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan $plan)
    {
        $this->billing_cycle = $billing_cycle;
        $this->next_billing_date = $next_billing_date;
        $this->is_installed = $is_installed;
        $this->unit_count = $unit_count;
        $this->on_free_trial = $on_free_trial;
        $this->free_trial_ends_on = $free_trial_ends_on;
        $this->updated_at = $updated_at;
        $this->plan = $plan;
    }
}
