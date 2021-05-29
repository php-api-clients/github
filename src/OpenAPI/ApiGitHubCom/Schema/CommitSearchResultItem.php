<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\Parents;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\TextMatches;

final class CommitSearchResultItem
{
    public const SCHEMA_TITLE       = 'Commit Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Commit Search Result Item';
    private ?string $url            = null;
    private ?string $sha            = null;
    private ?string $html_url       = null;
    private ?string $comments_url   = null;
    private array $commit           = [];
    private $author;
    private $committer;
    /**
     * @var array<Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\Parents::class)
     */
    private array $parents = [];
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;
    private ?number $score                 = null;
    private ?string $node_id               = null;
    /**
     * @var array<TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem\TextMatches::class)
     */
    private array $text_matches = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function comments_url(): ?string
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

    public function parents(): array
    {
        return $this->parents;
    }

    public function repository(): ?MinimalRepository
    {
        return $this->repository;
    }

    public function score(): ?number
    {
        return $this->score;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function text_matches(): array
    {
        return $this->text_matches;
    }
}
