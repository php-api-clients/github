<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

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
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $author = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $committer = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Parents::class)
     */
    private array $parents = array();
    private array $stats = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Files>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Files::class)
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
    /**
     * Simple User
     */
    public function author() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->author;
    }
    /**
     * Simple User
     */
    public function committer() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->committer;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Parents>
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Commit\Files>
     */
    public function files() : array
    {
        return $this->files;
    }
}
