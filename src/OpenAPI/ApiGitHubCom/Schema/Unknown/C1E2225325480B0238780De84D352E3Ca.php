<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C1E2225325480B0238780De84D352E3Ca
{
    public const SCHEMA_JSON = '{"required":["tier"],"type":"object","properties":{"tier":{"required":["from"],"type":"object","properties":{"from":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}}}}}';
    public const SCHEMA_TITLE = 'c_1e2225325480b0238780de84d352e3ca';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF87473C8C3F6C8B5A00Abcd48E143093::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF87473C8C3F6C8B5A00Abcd48E143093 $tier;
    public function tier() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF87473C8C3F6C8B5A00Abcd48E143093
    {
        return $this->tier;
    }
}
