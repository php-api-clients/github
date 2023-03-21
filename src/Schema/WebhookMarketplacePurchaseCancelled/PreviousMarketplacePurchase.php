<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseCancelled;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PreviousMarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}},"billing_cycle":{"type":"string"},"free_trial_ends_on":{"type":["null"]},"next_billing_date":{"type":["string","null"]},"on_free_trial":{"type":"boolean"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}},"unit_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"account":{"id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organization_billing_email":"generated_organization_billing_email_null","type":"generated_type_null"},"billing_cycle":"generated_billing_cycle_null","free_trial_ends_on":null,"next_billing_date":"generated_next_billing_date_null","on_free_trial":false,"plan":{"bullets":["generated_bullets_null"],"description":"generated_description_null","has_free_trial":false,"id":13,"monthly_price_in_cents":13,"name":"generated_name_null","price_model":"generated_price_model_null","unit_name":"generated_unit_name_null","yearly_price_in_cents":13},"unit_count":13}';
    public function __construct(public Schema\WebhookMarketplacePurchaseCancelled\MarketplacePurchase\Account $account, public string $billing_cycle, public mixed $free_trial_ends_on, public ?string $next_billing_date, public bool $on_free_trial, public Schema\WebhookMarketplacePurchaseCancelled\MarketplacePurchase\Plan $plan, public int $unit_count)
    {
    }
}
