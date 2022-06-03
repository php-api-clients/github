<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CommitSearchResultItem
{
    public const SCHEMA_TITLE = 'Commit Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Commit Search Result Item';
    private string $url;
    private string $sha;
    private string $html_url;
    private string $comments_url;
    private array $commit = array();
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser $author = null;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableGitUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableGitUser $committer = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\Parents::class)
     */
    private array $parents = array();
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository $repository;
    private int $score;
    private string $node_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
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
    public function author() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser
    {
        return $this->author;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableGitUser
    {
        return $this->committer;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function score() : int
    {
        return $this->score;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CommitSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
