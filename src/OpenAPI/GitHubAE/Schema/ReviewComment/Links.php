<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReviewComment;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = 'ReviewComment\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $self;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $html;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $pull_request;
    /**
     * Hypermedia Link
     */
    public function self() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->self;
    }
    /**
     * Hypermedia Link
     */
    public function html() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->html;
    }
    /**
     * Hypermedia Link
     */
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->pull_request;
    }
}
