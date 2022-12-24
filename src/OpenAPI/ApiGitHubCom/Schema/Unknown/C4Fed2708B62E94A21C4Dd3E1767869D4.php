<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C4Fed2708B62E94A21C4Dd3E1767869D4
{
    public const SCHEMA_JSON = '{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"created_at":{"type":"string"},"maintainer":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"node_id":{"type":"string"},"privacy_level":{"type":"string"},"sponsor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"sponsorable":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}}}';
    public const SCHEMA_TITLE = 'c_4fed2708b62e94a21c4dd3e1767869d4';
    public const SCHEMA_DESCRIPTION = '';
    private string $created_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF9F083E1067C6Dcb2Fb6Ac3Ddb318Be9::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF9F083E1067C6Dcb2Fb6Ac3Ddb318Be9 $maintainer = null;
    private string $node_id;
    private string $privacy_level;
    private $sponsor;
    private $sponsorable;
    /**
     * The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F013B0Abd1E38816Cb4A3Da59904Ae0::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F013B0Abd1E38816Cb4A3Da59904Ae0 $tier;
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function maintainer() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF9F083E1067C6Dcb2Fb6Ac3Ddb318Be9
    {
        return $this->maintainer;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function privacy_level() : string
    {
        return $this->privacy_level;
    }
    public function sponsor()
    {
        return $this->sponsor;
    }
    public function sponsorable()
    {
        return $this->sponsorable;
    }
    /**
     * The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     */
    public function tier() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F013B0Abd1E38816Cb4A3Da59904Ae0
    {
        return $this->tier;
    }
}