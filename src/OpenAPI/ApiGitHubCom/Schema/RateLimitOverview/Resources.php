<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimitOverview;

final class Resources
{
    public const SCHEMA_JSON = '{"required":["core","search"],"type":"object","properties":{"core":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"graphql":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"search":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"source_import":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"integration_manifest":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"code_scanning_upload":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"actions_runner_registration":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"scim":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}},"dependency_snapshots":{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = 'RateLimitOverview\\Resources';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $core;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $graphql = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $search;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $source_import = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $integration_manifest = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $code_scanning_upload = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $actions_runner_registration = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $scim = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit $dependency_snapshots = null;
    public function core() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->core;
    }
    public function graphql() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->graphql;
    }
    public function search() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->search;
    }
    public function source_import() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->source_import;
    }
    public function integration_manifest() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->integration_manifest;
    }
    public function code_scanning_upload() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->code_scanning_upload;
    }
    public function actions_runner_registration() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->actions_runner_registration;
    }
    public function scim() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->scim;
    }
    public function dependency_snapshots() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RateLimit
    {
        return $this->dependency_snapshots;
    }
}