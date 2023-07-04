<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietB0609077\Tiet747F05B8\Tiet025F0545;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietB779F0B4
{
    public const SCHEMA_JSON         = '{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}},"billing_cycle":{"type":"string"},"free_trial_ends_on":{"type":["null"]},"next_billing_date":{"type":["string","null"]},"on_free_trial":{"type":"boolean"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}},"unit_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"account":{"id":2,"login":"generated","node_id":"generated","organization_billing_email":"generated","type":"generated"},"billing_cycle":"generated","free_trial_ends_on":"generated","next_billing_date":"generated","on_free_trial":false,"plan":{"bullets":["generated","generated"],"description":"generated","has_free_trial":false,"id":2,"monthly_price_in_cents":22,"name":"generated","price_model":"FREE","unit_name":"generated","yearly_price_in_cents":21},"unit_count":10}';

    public function __construct(public Schema\WebhookMarketplacePurchaseCancelled\PreviousMarketplacePurchase\Account $account, #[MapFrom('billing_cycle')]
    public string $billingCycle, #[MapFrom('free_trial_ends_on')]
    public string $freeTrialEndsOn, #[MapFrom('next_billing_date')]
    public string|null $nextBillingDate, #[MapFrom('on_free_trial')]
    public bool $onFreeTrial, public Schema\WebhookMarketplacePurchaseCancelled\PreviousMarketplacePurchase\Plan $plan, #[MapFrom('unit_count')]
    public int $unitCount,)
    {
    }
}
