<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C45Fc12Bc3634C3A1Ed56D5C4Bb2Ea678
{
    public const SCHEMA_JSON = '{"required":["title","body"],"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."},"private":{"type":"boolean","description":"Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.","default":false}}}';
    public const SCHEMA_TITLE = 'c_45fc12bc3634c3a1ed56d5c4bb2ea678';
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
