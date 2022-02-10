<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SponsorshipTier
{
    public const SCHEMA_TITLE = 'Sponsorship Tier';
    public const SCHEMA_DESCRIPTION = 'The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.';
    private string $node_id;
    private string $created_at;
    private string $description;
    private int $monthly_price_in_cents;
    private int $monthly_price_in_dollars;
    private string $name;
    private bool $is_one_time;
    private bool $is_custom_ammount;
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function description() : string
    {
        return $this->description;
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
    public function is_one_time() : bool
    {
        return $this->is_one_time;
    }
    public function is_custom_ammount() : bool
    {
        return $this->is_custom_ammount;
    }
}
