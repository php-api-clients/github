<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Commit
{
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = 'Commit';
    private string $url;
    private string $sha;
    private string $node_id;
    private string $html_url;
    private string $comments_url;
    private array $commit = array();
    private $author;
    private $committer;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Parents::class)
     */
    private array $parents = array();
    private array $stats = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry::class)
     */
    private array $files = array();
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function author()
    {
        return $this->author;
    }
    public function committer()
    {
        return $this->committer;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    public function stats() : array
    {
        return $this->stats;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry>
     */
    public function files() : array
    {
        return $this->files;
    }
}
