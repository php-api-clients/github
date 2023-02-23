<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\RateLimitOverview;

final readonly class Resources
{
    public const SCHEMA_JSON = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\RateLimit $core;
    public \ApiClients\Client\Github\Schema\RateLimit $graphql;
    public ?\ApiClients\Client\Github\Schema\RateLimit $search;
    public \ApiClients\Client\Github\Schema\RateLimit $source_import;
    public \ApiClients\Client\Github\Schema\RateLimit $integration_manifest;
    public \ApiClients\Client\Github\Schema\RateLimit $code_scanning_upload;
    public \ApiClients\Client\Github\Schema\RateLimit $actions_runner_registration;
    public \ApiClients\Client\Github\Schema\RateLimit $scim;
    public \ApiClients\Client\Github\Schema\RateLimit $dependency_snapshots;
    public function __construct(\ApiClients\Client\Github\Schema\RateLimit $core, \ApiClients\Client\Github\Schema\RateLimit $graphql, \ApiClients\Client\Github\Schema\RateLimit $search, \ApiClients\Client\Github\Schema\RateLimit $source_import, \ApiClients\Client\Github\Schema\RateLimit $integration_manifest, \ApiClients\Client\Github\Schema\RateLimit $code_scanning_upload, \ApiClients\Client\Github\Schema\RateLimit $actions_runner_registration, \ApiClients\Client\Github\Schema\RateLimit $scim, \ApiClients\Client\Github\Schema\RateLimit $dependency_snapshots)
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
