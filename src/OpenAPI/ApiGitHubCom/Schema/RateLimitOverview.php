<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RateLimitOverview
{
    public const SCHEMA_JSON = '{"title":"Rate Limit Overview","required":["rate","resources"],"type":"object","properties":{"resources":{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}},"rate":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}},"description":"Rate Limit Overview"}';
    public const SCHEMA_TITLE = 'Rate Limit Overview';
    public const SCHEMA_DESCRIPTION = 'Rate Limit Overview';
    public readonly array $resources;
    public readonly array $rate;
    public function __construct(array $resources, array $rate)
    {
        $this->resources = $resources;
        $this->rate = $rate;
    }
}
