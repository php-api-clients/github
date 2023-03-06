<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSponsorshipCancelled\Sponsorship;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tier
{
    public const SCHEMA_JSON = '{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}';
    public const SCHEMA_TITLE = 'Sponsorship Tier';
    public const SCHEMA_DESCRIPTION = 'The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"generated_created_at","description":"generated_description","is_custom_ammount":false,"is_custom_amount":false,"is_one_time":false,"monthly_price_in_cents":13,"monthly_price_in_dollars":13,"name":"generated_name","node_id":"generated_node_id"}';
    public function __construct(public ?string $created_at, public ?string $description, public bool $is_custom_ammount, public bool $is_custom_amount, public ?bool $is_one_time, public ?int $monthly_price_in_cents, public ?int $monthly_price_in_dollars, public ?string $name, public ?string $node_id)
    {
    }
}
