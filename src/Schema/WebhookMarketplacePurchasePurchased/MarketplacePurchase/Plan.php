<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePurchased\MarketplacePurchase;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Plan
{
    public const SCHEMA_JSON = '{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"bullets":["generated_bullets_null"],"description":"generated_description_null","has_free_trial":false,"id":13,"monthly_price_in_cents":13,"name":"generated_name_null","price_model":"FREE","unit_name":"generated_unit_name_null","yearly_price_in_cents":13}';
    /**
     * @param array<string> $bullets
     */
    public function __construct(public array $bullets, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('has_free_trial')] public bool $hasFreeTrial, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('monthly_price_in_cents')] public int $monthlyPriceInCents, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('price_model')] public string $priceModel, #[\EventSauce\ObjectHydrator\MapFrom('unit_name')] public ?string $unitName, #[\EventSauce\ObjectHydrator\MapFrom('yearly_price_in_cents')] public int $yearlyPriceInCents)
    {
    }
}
