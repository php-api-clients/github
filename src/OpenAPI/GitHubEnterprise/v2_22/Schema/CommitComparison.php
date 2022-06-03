<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CommitComparison
{
    public const SCHEMA_TITLE = 'Commit Comparison';
    public const SCHEMA_DESCRIPTION = 'Commit Comparison';
    private string $url;
    private string $html_url;
    private string $permalink_url;
    private string $diff_url;
    private string $patch_url;
    /**
     * Commit
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit $base_commit;
    /**
     * Commit
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit $merge_base_commit;
    private string $status;
    private int $ahead_by;
    private int $behind_by;
    private int $total_commits;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit::class)
     */
    private array $commits = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\DiffEntry>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\DiffEntry::class)
     */
    private array $files = array();
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function permalink_url() : string
    {
        return $this->permalink_url;
    }
    public function diff_url() : string
    {
        return $this->diff_url;
    }
    public function patch_url() : string
    {
        return $this->patch_url;
    }
    /**
     * Commit
     */
    public function base_commit() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit
    {
        return $this->base_commit;
    }
    /**
     * Commit
     */
    public function merge_base_commit() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit
    {
        return $this->merge_base_commit;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function ahead_by() : int
    {
        return $this->ahead_by;
    }
    public function behind_by() : int
    {
        return $this->behind_by;
    }
    public function total_commits() : int
    {
        return $this->total_commits;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit>
     */
    public function commits() : array
    {
        return $this->commits;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\DiffEntry>
     */
    public function files() : array
    {
        return $this->files;
    }
}
