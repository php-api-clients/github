<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSponsorshipEdited;

final class Sponsorship
{
    public const SCHEMA_JSON = '{"required":["node_id","created_at","sponsorable","sponsor","privacy_level","tier"],"type":"object","properties":{"created_at":{"type":"string"},"maintainer":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"node_id":{"type":"string"},"privacy_level":{"type":"string"},"sponsor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"sponsorable":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"tier":{"title":"Sponsorship Tier","required":["node_id","created_at","description","monthly_price_in_cents","monthly_price_in_dollars","name","is_one_time"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":"string"},"is_custom_ammount":{"type":"boolean"},"is_custom_amount":{"type":"boolean"},"is_one_time":{"type":"boolean"},"monthly_price_in_cents":{"type":"integer"},"monthly_price_in_dollars":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"}},"description":"The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."}}}';
    public const SCHEMA_TITLE = 'WebhookSponsorshipEdited\\Sponsorship';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $created_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Maintainer $maintainer;
    public readonly string $node_id;
    public readonly string $privacy_level;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Sponsor $sponsor;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Sponsorable $sponsorable;
    /**
     * The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Tier $tier;
    public function __construct(string $created_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Maintainer $maintainer, string $node_id, string $privacy_level, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Sponsor $sponsor, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Sponsorable $sponsorable, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Sponsorship\Tier $tier)
    {
        $this->created_at = $created_at;
        $this->maintainer = $maintainer;
        $this->node_id = $node_id;
        $this->privacy_level = $privacy_level;
        $this->sponsor = $sponsor;
        $this->sponsorable = $sponsorable;
        $this->tier = $tier;
    }
}
