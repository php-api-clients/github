<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit;

final readonly class Resources
{
    public const SCHEMA_JSON        = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?RateLimit $core;
    public RateLimit $graphql;
    public ?RateLimit $search;
    public RateLimit $source_import;
    public RateLimit $integration_manifest;
    public RateLimit $code_scanning_upload;
    public RateLimit $actions_runner_registration;
    public RateLimit $scim;
    public RateLimit $dependency_snapshots;

    public function __construct(RateLimit $core, RateLimit $graphql, RateLimit $search, RateLimit $source_import, RateLimit $integration_manifest, RateLimit $code_scanning_upload, RateLimit $actions_runner_registration, RateLimit $scim, RateLimit $dependency_snapshots)
    {
        $this->core                        = $core;
        $this->graphql                     = $graphql;
        $this->search                      = $search;
        $this->source_import               = $source_import;
        $this->integration_manifest        = $integration_manifest;
        $this->code_scanning_upload        = $code_scanning_upload;
        $this->actions_runner_registration = $actions_runner_registration;
        $this->scim                        = $scim;
        $this->dependency_snapshots        = $dependency_snapshots;
    }
}
