<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship;

final class Tier
{
    public const SCHEMA_JSON = '{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Sponsorship Tier';
    public const SCHEMA_DESCRIPTION = 'The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.';
    public readonly string $created_at;
    public readonly string $description;
    public readonly ?bool $is_custom_ammount;
    public readonly ?bool $is_custom_amount;
    public readonly bool $is_one_time;
    public readonly int $monthly_price_in_cents;
    public readonly int $monthly_price_in_dollars;
    public readonly string $name;
    public readonly string $node_id;
    public function __construct(string $created_at, string $description, bool $is_custom_ammount, bool $is_custom_amount, bool $is_one_time, int $monthly_price_in_cents, int $monthly_price_in_dollars, string $name, string $node_id)
    {
        $this->created_at = $created_at;
        $this->description = $description;
        $this->is_custom_ammount = $is_custom_ammount;
        $this->is_custom_amount = $is_custom_amount;
        $this->is_one_time = $is_one_time;
        $this->monthly_price_in_cents = $monthly_price_in_cents;
        $this->monthly_price_in_dollars = $monthly_price_in_dollars;
        $this->name = $name;
        $this->node_id = $node_id;
    }
}
