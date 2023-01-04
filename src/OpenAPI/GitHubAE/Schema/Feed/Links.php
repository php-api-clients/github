<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Feed;

final class Links
{
    public const SCHEMA_JSON = '{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}';
    public const SCHEMA_TITLE = 'Feed\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $timeline;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $user;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $security_advisories = null;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $current_user = null;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $current_user_public = null;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $current_user_actor = null;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $current_user_organization = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private array $current_user_organizations = array();
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $repository_discussions = null;
    /**
     * Hypermedia Link with Type
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType $repository_discussions_category = null;
    /**
     * Hypermedia Link with Type
     */
    public function timeline() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->timeline;
    }
    /**
     * Hypermedia Link with Type
     */
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->user;
    }
    /**
     * Hypermedia Link with Type
     */
    public function security_advisories() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->security_advisories;
    }
    /**
     * Hypermedia Link with Type
     */
    public function current_user() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->current_user;
    }
    /**
     * Hypermedia Link with Type
     */
    public function current_user_public() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->current_user_public;
    }
    /**
     * Hypermedia Link with Type
     */
    public function current_user_actor() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->current_user_actor;
    }
    /**
     * Hypermedia Link with Type
     */
    public function current_user_organization() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->current_user_organization;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType>
     */
    public function current_user_organizations() : array
    {
        return $this->current_user_organizations;
    }
    /**
     * Hypermedia Link with Type
     */
    public function repository_discussions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->repository_discussions;
    }
    /**
     * Hypermedia Link with Type
     */
    public function repository_discussions_category() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LinkWithType
    {
        return $this->repository_discussions_category;
    }
}
