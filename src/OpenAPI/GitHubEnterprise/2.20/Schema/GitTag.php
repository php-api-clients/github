<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Schema;

final class GitTag
{
    public const SCHEMA_TITLE = 'Git Tag';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    private string $node_id;
    /**Name of the tag**/
    private string $tag;
    private string $sha;
    /**URL for the tag**/
    private string $url;
    /**Message describing the purpose of the tag**/
    private string $message;
    private object $tagger;
    private object $object;
    private object $verification;
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function tag() : string
    {
        return $this->tag;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tagger() : object
    {
        return $this->tagger;
    }
    public function object() : object
    {
        return $this->object;
    }
    public function verification() : object
    {
        return $this->verification;
    }
}
