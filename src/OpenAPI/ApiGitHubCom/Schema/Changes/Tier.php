<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Tier
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\Tier';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tier\From $from;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tier\From $from)
    {
        $this->from = $from;
    }
}
