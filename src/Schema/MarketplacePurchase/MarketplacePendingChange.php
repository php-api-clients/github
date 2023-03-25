<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\MarketplacePurchase;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MarketplacePendingChange
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"is_installed":{"type":"boolean"},"effective_date":{"type":"string"},"unit_count":{"type":["integer","null"]},"id":{"type":"integer"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"isInstalled":false,"effectiveDate":"generated_effective_date_null","unitCount":13,"id":13,"plan":{"url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313","accountsUrl":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts","id":1313,"number":3,"name":"Pro","description":"A professional-grade CI solution","monthlyPriceInCents":1099,"yearlyPriceInCents":11870,"priceModel":"FLAT_RATE","hasFreeTrial":true,"unitName":"generated_unit_name_null","state":"published","bullets":["Up to 25 private repositories"]}}';
    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('is_installed')] public ?bool $isInstalled, #[\EventSauce\ObjectHydrator\MapFrom('effective_date')] public ?string $effectiveDate, #[\EventSauce\ObjectHydrator\MapFrom('unit_count')] public ?int $unitCount, public ?int $id, public ?Schema\MarketplaceListingPlan $plan)
    {
    }
}
