<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link;

final readonly class Links
{
    public const SCHEMA_JSON        = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     */
    public ?Link $self;
    /**
     * Hypermedia Link
     */
    public ?Link $html;
    /**
     * Hypermedia Link
     */
    public ?Link $pull_request;

    public function __construct(Link $self, Link $html, Link $pull_request)
    {
        $this->self         = $self;
        $this->html         = $html;
        $this->pull_request = $pull_request;
    }
}
