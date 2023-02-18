<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan;

final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"billing_cycle":{"type":"string"},"next_billing_date":{"type":["string","null"]},"is_installed":{"type":"boolean"},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":["string","null"]},"updated_at":{"type":"string"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $billing_cycle;
    public ?string $next_billing_date;
    public ?bool $is_installed;
    public ?int $unit_count;
    public ?bool $on_free_trial;
    public ?string $free_trial_ends_on;
    public ?string $updated_at;
    /**
     * Marketplace Listing Plan
     */
    public ?MarketplaceListingPlan $plan;

    public function __construct(string $billing_cycle, string $next_billing_date, bool $is_installed, int $unit_count, bool $on_free_trial, string $free_trial_ends_on, string $updated_at, MarketplaceListingPlan $plan)
    {
        $this->billing_cycle      = $billing_cycle;
        $this->next_billing_date  = $next_billing_date;
        $this->is_installed       = $is_installed;
        $this->unit_count         = $unit_count;
        $this->on_free_trial      = $on_free_trial;
        $this->free_trial_ends_on = $free_trial_ends_on;
        $this->updated_at         = $updated_at;
        $this->plan               = $plan;
    }
}
