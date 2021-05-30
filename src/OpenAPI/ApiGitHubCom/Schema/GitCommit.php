<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitCommit
{
    public const SCHEMA_TITLE = 'Git Commit';
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
    private array $author = array();
    /**
     * Identifying information for the git-user
     */
    private array $committer = array();
    /**
     * Message describing the purpose of the commit
     */
    private string $message;
    private array $tree = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit\Parents::class)
     */
    private array $parents = array();
    private array $verification = array();
    private string $html_url;
    /**
     * SHA for the commit
     */
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
    /**
     * Identifying information for the git-user
     */
    public function author() : array
    {
        return $this->author;
    }
    /**
     * Identifying information for the git-user
     */
    public function committer() : array
    {
        return $this->committer;
    }
    /**
     * Message describing the purpose of the commit
     */
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : array
    {
        return $this->tree;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : array
    {
        return $this->verification;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
