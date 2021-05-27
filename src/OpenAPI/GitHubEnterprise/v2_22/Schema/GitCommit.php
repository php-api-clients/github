<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class GitCommit
{
    public const SCHEMA_TITLE = 'Git Commit';
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
    private array $author = array();
    /**
     * Identifying information for the git-user
     */
    private array $committer = array();
    /**
     * Message describing the purpose of the commit
     */
    private ?string $message = null;
    private array $tree = array();
    private array $parents = array();
    private array $verification = array();
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
    public function author() : array
    {
        return $this->author;
    }
    public function committer() : array
    {
        return $this->committer;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function tree() : array
    {
        return $this->tree;
    }
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : array
    {
        return $this->verification;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
