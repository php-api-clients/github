<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview;

final class Resources
{
    public const SCHEMA_JSON = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = 'RateLimitOverview\\Resources';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $core;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $graphql;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $search;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $source_import;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $integration_manifest;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $code_scanning_upload;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $actions_runner_registration;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $scim;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $dependency_snapshots;
    public function __construct(object $core, object $graphql, object $search, object $source_import, object $integration_manifest, object $code_scanning_upload, object $actions_runner_registration, object $scim, object $dependency_snapshots)
    {
        $this->core = $core;
        $this->graphql = $graphql;
        $this->search = $search;
        $this->source_import = $source_import;
        $this->integration_manifest = $integration_manifest;
        $this->code_scanning_upload = $code_scanning_upload;
        $this->actions_runner_registration = $actions_runner_registration;
        $this->scim = $scim;
        $this->dependency_snapshots = $dependency_snapshots;
    }
}
