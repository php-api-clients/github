<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateDiscussionLegacy\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["title","body"],"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."},"private":{"type":"boolean","description":"Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.","default":false}}}';
    public const SCHEMA_TITLE = 'CreateDiscussionLegacy\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion post's title.
     */
    public readonly string $title;
    /**
     * The discussion post's body text.
     */
    public readonly string $body;
    /**
     * Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.
     */
    public readonly ?bool $private;
    public function __construct(string $title, string $body, bool $private)
    {
        $this->title = $title;
        $this->body = $body;
        $this->private = $private;
    }
}
