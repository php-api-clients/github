<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\CommitSearchResultItem\Parents;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\CommitSearchResultItem\TextMatches;

final class CommitSearchResultItem
{
    public const SCHEMA_TITLE       = 'Commit Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Commit Search Result Item';
    private string $url;
    private string $sha;
    private string $html_url;
    private string $comments_url;
    private array $commit = [];
    private $author;
    private $committer;
    private array $parents = [];
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\MinimalRepository::class)
     */
    private MinimalRepository $repository;
    private number $score;
    private string $node_id;
    private array $text_matches = [];

    public function url(): string
    {
        return $this->url;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function comments_url(): string
    {
        return $this->comments_url;
    }

    public function commit(): array
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
     * @return array<Parents>
     */
    public function parents(): array
    {
        return $this->parents;
    }

    /**
     * Minimal Repository
     */
    public function repository(): MinimalRepository
    {
        return $this->repository;
    }

    public function score(): number
    {
        return $this->score;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * @return array<TextMatches>
     */
    public function text_matches(): array
    {
        return $this->text_matches;
    }
}
