<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class GitTag
{
    public const SCHEMA_TITLE = 'Git Tag';
    public const SPL_HASH = '0000000023823df2000000001c501073';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    private ?string $node_id = null;
    /**
     * Name of the tag
     */
    private ?string $tag = null;
    private ?string $sha = null;
    /**
     * URL for the tag
     */
    private ?string $url = null;
    /**
     * Message describing the purpose of the tag
     */
    private ?string $message = null;
    private ?object $tagger = null;
    private ?object $object = null;
    private ?object $verification = null;
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function tag() : ?string
    {
        return $this->tag;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function tagger() : ?object
    {
        return $this->tagger;
    }
    public function object() : ?object
    {
        return $this->object;
    }
    public function verification() : ?object
    {
        return $this->verification;
    }
}
