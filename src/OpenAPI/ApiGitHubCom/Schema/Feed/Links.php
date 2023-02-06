<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed;

final class Links
{
    public const SCHEMA_JSON = '{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Feed\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link with Type
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $timeline;
    /**
     * Hypermedia Link with Type
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $user;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $security_advisories;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_public;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_actor;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_organization;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType>
     */
    public readonly array $current_user_organizations;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $repository_discussions;
    /**
     * Hypermedia Link with Type
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $repository_discussions_category;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType> $current_user_organizations
     */
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $timeline, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $user, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $security_advisories, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_public, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_actor, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $current_user_organization, array $current_user_organizations, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $repository_discussions, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LinkWithType $repository_discussions_category)
    {
        $this->timeline = $timeline;
        $this->user = $user;
        $this->security_advisories = $security_advisories;
        $this->current_user = $current_user;
        $this->current_user_public = $current_user_public;
        $this->current_user_actor = $current_user_actor;
        $this->current_user_organization = $current_user_organization;
        $this->current_user_organizations = $current_user_organizations;
        $this->repository_discussions = $repository_discussions;
        $this->repository_discussions_category = $repository_discussions_category;
    }
}
