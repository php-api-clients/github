<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitCommit
{
    public const SCHEMA_TITLE = 'Git Commit';
    public const SPL_HASH = '0000000054d5e0750000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Low-level Git commit operations within a repository';
    /**
     * SHA for the commit
     */
    private string $sha;
    private string $node_id;
    private string $url;
    /**
     * Identifying information for the git-user
     */
    private object $author;
    /**
     * Identifying information for the git-user
     */
    private object $committer;
    /**
     * Message describing the purpose of the commit
     */
    private string $message;
    private object $tree;
    private array $parents;
    private object $verification;
    private string $html_url;
    public function sha() : string
    {
        return $this->sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function author() : object
    {
        return $this->author;
    }
    public function committer() : object
    {
        return $this->committer;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : object
    {
        return $this->tree;
    }
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : object
    {
        return $this->verification;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
