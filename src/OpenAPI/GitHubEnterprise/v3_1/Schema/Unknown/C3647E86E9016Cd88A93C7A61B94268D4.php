<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C3647E86E9016Cd88A93C7A61B94268D4
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = 'c_3647e86e9016cd88a93c7a61b94268d4';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link $self;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link $html;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link $pull_request;
    /**
     * Hypermedia Link
     */
    public function self() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link
    {
        return $this->self;
    }
    /**
     * Hypermedia Link
     */
    public function html() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link
    {
        return $this->html;
    }
    /**
     * Hypermedia Link
     */
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Link
    {
        return $this->pull_request;
    }
}