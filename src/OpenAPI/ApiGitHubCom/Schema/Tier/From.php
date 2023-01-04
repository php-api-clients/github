<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tier;

final class From
{
    public const SCHEMA_JSON = '{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}';
    public const SCHEMA_TITLE = 'Sponsorship Tier';
    public const SCHEMA_DESCRIPTION = 'The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.';
    private string $created_at;
    private string $description;
    private ?bool $is_custom_ammount = null;
    private ?bool $is_custom_amount = null;
    private bool $is_one_time;
    private int $monthly_price_in_cents;
    private int $monthly_price_in_dollars;
    private string $name;
    private string $node_id;
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function is_custom_ammount() : ?bool
    {
        return $this->is_custom_ammount;
    }
    public function is_custom_amount() : ?bool
    {
        return $this->is_custom_amount;
    }
    public function is_one_time() : bool
    {
        return $this->is_one_time;
    }
    public function monthly_price_in_cents() : int
    {
        return $this->monthly_price_in_cents;
    }
    public function monthly_price_in_dollars() : int
    {
        return $this->monthly_price_in_dollars;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
