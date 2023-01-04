<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Feed
{
    public const SCHEMA_JSON = '{"title":"Feed","required":["_links","timeline_url","user_url"],"type":"object","properties":{"timeline_url":{"type":"string","examples":["https:\\/\\/github.com\\/timeline"]},"user_url":{"type":"string","examples":["https:\\/\\/github.com\\/{user}"]},"current_user_public_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat"]},"current_user_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private?token=abc123"]},"current_user_actor_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private.actor?token=abc123"]},"current_user_organization_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat-org"]},"current_user_organization_urls":{"type":"array","items":{"type":"string","format":"uri"},"examples":["https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"]},"security_advisories_url":{"type":"string","examples":["https:\\/\\/github.com\\/security-advisories"]},"repository_discussions_url":{"type":"string","description":"A feed of discussions for a given repository.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions"]},"repository_discussions_category_url":{"type":"string","description":"A feed of discussions for a given repository and category.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}"]},"_links":{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}},"description":"Feed"}';
    public const SCHEMA_TITLE = 'Feed';
    public const SCHEMA_DESCRIPTION = 'Feed';
    private string $timeline_url;
    private string $user_url;
    private ?string $current_user_public_url = null;
    private ?string $current_user_url = null;
    private ?string $current_user_actor_url = null;
    private ?string $current_user_organization_url = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\CurrentUserOrganizationUrls>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\CurrentUserOrganizationUrls::class)
     */
    private array $current_user_organization_urls = array();
    private ?string $security_advisories_url = null;
    /**
     * A feed of discussions for a given repository.
     */
    private ?string $repository_discussions_url = null;
    /**
     * A feed of discussions for a given repository and category.
     */
    private ?string $repository_discussions_category_url = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\Links $_links;
    public function timeline_url() : string
    {
        return $this->timeline_url;
    }
    public function user_url() : string
    {
        return $this->user_url;
    }
    public function current_user_public_url() : ?string
    {
        return $this->current_user_public_url;
    }
    public function current_user_url() : ?string
    {
        return $this->current_user_url;
    }
    public function current_user_actor_url() : ?string
    {
        return $this->current_user_actor_url;
    }
    public function current_user_organization_url() : ?string
    {
        return $this->current_user_organization_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\CurrentUserOrganizationUrls>
     */
    public function current_user_organization_urls() : array
    {
        return $this->current_user_organization_urls;
    }
    public function security_advisories_url() : ?string
    {
        return $this->security_advisories_url;
    }
    /**
     * A feed of discussions for a given repository.
     */
    public function repository_discussions_url() : ?string
    {
        return $this->repository_discussions_url;
    }
    /**
     * A feed of discussions for a given repository and category.
     */
    public function repository_discussions_category_url() : ?string
    {
        return $this->repository_discussions_category_url;
    }
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Feed\Links
    {
        return $this->_links;
    }
}
