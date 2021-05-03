<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GitCommit
{
    public const SCHEMA_TITLE = 'Git Commit';
    public const SPL_HASH = '0000000008b9204b00000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Low-level Git commit operations within a repository';
    /**
     * SHA for the commit
     */
    private ?string $sha = null;
    private ?string $node_id = null;
    private ?string $url = null;
    /**
     * Identifying information for the git-user
     */
    private ?object $author = null;
    /**
     * Identifying information for the git-user
     */
    private ?object $committer = null;
    /**
     * Message describing the purpose of the commit
     */
    private ?string $message = null;
    private ?object $tree = null;
    private array $parents = array();
    private ?object $verification = null;
    private ?string $html_url = null;
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function author() : ?object
    {
        return $this->author;
    }
    public function committer() : ?object
    {
        return $this->committer;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function tree() : ?object
    {
        return $this->tree;
    }
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : ?object
    {
        return $this->verification;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
