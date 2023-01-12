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
    private string $title;
    /**
     * The discussion post's body text.
     */
    private string $body;
    /**
     * Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.
     */
    private ?bool $private = null;
    /**
     * The discussion post's title.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The discussion post's body text.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
}
