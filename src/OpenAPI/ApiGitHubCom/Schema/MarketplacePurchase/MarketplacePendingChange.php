<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan;

final readonly class MarketplacePendingChange
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"properties":{"is_installed":{"type":"boolean"},"effective_date":{"type":"string"},"unit_count":{"type":["integer","null"]},"id":{"type":"integer"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $is_installed;
    public ?string $effective_date;
    public ?int $unit_count;
    public ?int $id;
    /**
     * Marketplace Listing Plan
     */
    public ?MarketplaceListingPlan $plan;

    public function __construct(bool $is_installed, string $effective_date, int $unit_count, int $id, MarketplaceListingPlan $plan)
    {
        $this->is_installed   = $is_installed;
        $this->effective_date = $effective_date;
        $this->unit_count     = $unit_count;
        $this->id             = $id;
        $this->plan           = $plan;
    }
}
