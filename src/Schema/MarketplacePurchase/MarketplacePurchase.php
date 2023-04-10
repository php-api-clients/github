<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\MarketplacePurchase;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billing_cycle":{"type":"string"},"next_billing_date":{"type":["string","null"]},"is_installed":{"type":"boolean"},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":["string","null"]},"updated_at":{"type":"string"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"billing_cycle":"generated_billing_cycle_null","next_billing_date":"generated_next_billing_date_null","is_installed":false,"unit_count":13,"on_free_trial":false,"free_trial_ends_on":"generated_free_trial_ends_on_null","updated_at":"generated_updated_at_null","plan":{"url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313","accounts_url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts","id":1313,"number":3,"name":"Pro","description":"A professional-grade CI solution","monthly_price_in_cents":1099,"yearly_price_in_cents":11870,"price_model":"FLAT_RATE","has_free_trial":true,"unit_name":"generated_unit_name_null","state":"published","bullets":["Up to 25 private repositories"]}}';
    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('billing_cycle')] public ?string $billingCycle, #[\EventSauce\ObjectHydrator\MapFrom('next_billing_date')] public ?string $nextBillingDate, #[\EventSauce\ObjectHydrator\MapFrom('is_installed')] public ?bool $isInstalled, #[\EventSauce\ObjectHydrator\MapFrom('unit_count')] public ?int $unitCount, #[\EventSauce\ObjectHydrator\MapFrom('on_free_trial')] public ?bool $onFreeTrial, #[\EventSauce\ObjectHydrator\MapFrom('free_trial_ends_on')] public ?string $freeTrialEndsOn, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?Schema\MarketplaceListingPlan $plan)
    {
    }
}
