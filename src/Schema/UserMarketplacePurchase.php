<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class UserMarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"User Marketplace Purchase","required":["billing_cycle","next_billing_date","unit_count","updated_at","on_free_trial","free_trial_ends_on","account","plan"],"type":"object","properties":{"billing_cycle":{"type":"string","examples":["monthly"]},"next_billing_date":{"type":["string","null"],"format":"date-time","examples":["2017-11-11T00:00:00Z"]},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean","examples":[true]},"free_trial_ends_on":{"type":["string","null"],"format":"date-time","examples":["2017-11-11T00:00:00Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2017-11-02T01:12:12Z"]},"account":{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}},"description":"User Marketplace Purchase"}';
    public const SCHEMA_TITLE = 'User Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'User Marketplace Purchase';
    public const SCHEMA_EXAMPLE_DATA = '{"billing_cycle":"monthly","next_billing_date":"2017-11-11T00:00:00Z","unit_count":13,"on_free_trial":true,"free_trial_ends_on":"2017-11-11T00:00:00Z","updated_at":"2017-11-02T01:12:12Z","account":{"url":"https:\\/\\/example.com\\/","id":13,"type":"generated_type_null","node_id":"generated_node_id_null","login":"generated_login_null","email":"generated_email_email","organization_billing_email":"generated_organization_billing_email_email"},"plan":{"url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313","accounts_url":"https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts","id":1313,"number":3,"name":"Pro","description":"A professional-grade CI solution","monthly_price_in_cents":1099,"yearly_price_in_cents":11870,"price_model":"FLAT_RATE","has_free_trial":true,"unit_name":"generated_unit_name_null","state":"published","bullets":["Up to 25 private repositories"]}}';
    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('billing_cycle')] public string $billingCycle, #[\EventSauce\ObjectHydrator\MapFrom('next_billing_date')] public ?string $nextBillingDate, #[\EventSauce\ObjectHydrator\MapFrom('unit_count')] public ?int $unitCount, #[\EventSauce\ObjectHydrator\MapFrom('on_free_trial')] public bool $onFreeTrial, #[\EventSauce\ObjectHydrator\MapFrom('free_trial_ends_on')] public ?string $freeTrialEndsOn, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public Schema\MarketplaceAccount $account, public Schema\MarketplaceListingPlan $plan)
    {
    }
}
