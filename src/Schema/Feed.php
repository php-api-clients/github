<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Feed
{
    public const SCHEMA_JSON = '{"title":"Feed","required":["_links","timeline_url","user_url"],"type":"object","properties":{"timeline_url":{"type":"string","examples":["https:\\/\\/github.com\\/timeline"]},"user_url":{"type":"string","examples":["https:\\/\\/github.com\\/{user}"]},"current_user_public_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat"]},"current_user_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private?token=abc123"]},"current_user_actor_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat.private.actor?token=abc123"]},"current_user_organization_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat-org"]},"current_user_organization_urls":{"type":"array","items":{"type":"string","format":"uri"},"examples":["https:\\/\\/github.com\\/organizations\\/github\\/octocat.private.atom?token=abc123"]},"security_advisories_url":{"type":"string","examples":["https:\\/\\/github.com\\/security-advisories"]},"repository_discussions_url":{"type":"string","description":"A feed of discussions for a given repository.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions"]},"repository_discussions_category_url":{"type":"string","description":"A feed of discussions for a given repository and category.","examples":["https:\\/\\/github.com\\/{user}\\/{repo}\\/discussions\\/categories\\/{category}"]},"_links":{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}},"description":"Feed"}';
    public const SCHEMA_TITLE = 'Feed';
    public const SCHEMA_DESCRIPTION = 'Feed';
    public ?string $timeline_url;
    public ?string $user_url;
    public string $current_user_public_url;
    public string $current_user_url;
    public string $current_user_actor_url;
    public string $current_user_organization_url;
    public array $current_user_organization_urls;
    public string $security_advisories_url;
    /**
     * A feed of discussions for a given repository.
     */
    public string $repository_discussions_url;
    /**
     * A feed of discussions for a given repository and category.
     */
    public string $repository_discussions_category_url;
    public ?\ApiClients\Client\Github\Schema\Feed\Links $_links;
    public function __construct(string $timeline_url, string $user_url, string $current_user_public_url, string $current_user_url, string $current_user_actor_url, string $current_user_organization_url, array $current_user_organization_urls, string $security_advisories_url, string $repository_discussions_url, string $repository_discussions_category_url, \ApiClients\Client\Github\Schema\Feed\Links $_links)
    {
        $this->timeline_url = $timeline_url;
        $this->user_url = $user_url;
        $this->current_user_public_url = $current_user_public_url;
        $this->current_user_url = $current_user_url;
        $this->current_user_actor_url = $current_user_actor_url;
        $this->current_user_organization_url = $current_user_organization_url;
        $this->current_user_organization_urls = $current_user_organization_urls;
        $this->security_advisories_url = $security_advisories_url;
        $this->repository_discussions_url = $repository_discussions_url;
        $this->repository_discussions_category_url = $repository_discussions_category_url;
        $this->_links = $_links;
    }
}
