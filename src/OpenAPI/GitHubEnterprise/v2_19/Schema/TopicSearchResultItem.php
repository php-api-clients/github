<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\Aliases;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\Related;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\TextMatches;

final class TopicSearchResultItem
{
    public const SCHEMA_TITLE          = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION    = 'Topic Search Result Item';
    private ?string $name              = null;
    private ?string $display_name      = null;
    private ?string $short_description = null;
    private ?string $description       = null;
    private ?string $created_by        = null;
    private ?string $released          = null;
    private ?string $created_at        = null;
    private ?string $updated_at        = null;
    private ?bool $featured            = null;
    private ?bool $curated             = null;
    private ?number $score             = null;
    private ?int $repository_count     = null;
    private ?string $logo_url          = null;
    /**
     * @var array<TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\TextMatches::class)
     */
    private array $text_matches = [];
    /**
     * @var array<Related>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\Related::class)
     */
    private array $related = [];
    /**
     * @var array<Aliases>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\TopicSearchResultItem\Aliases::class)
     */
    private array $aliases = [];

    public function name(): ?string
    {
        return $this->name;
    }

    public function display_name(): ?string
    {
        return $this->display_name;
    }

    public function short_description(): ?string
    {
        return $this->short_description;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function created_by(): ?string
    {
        return $this->created_by;
    }

    public function released(): ?string
    {
        return $this->released;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function featured(): ?bool
    {
        return $this->featured;
    }

    public function curated(): ?bool
    {
        return $this->curated;
    }

    public function score(): ?number
    {
        return $this->score;
    }

    public function repository_count(): ?int
    {
        return $this->repository_count;
    }

    public function logo_url(): ?string
    {
        return $this->logo_url;
    }

    public function text_matches(): array
    {
        return $this->text_matches;
    }

    public function related(): array
    {
        return $this->related;
    }

    public function aliases(): array
    {
        return $this->aliases;
    }
}
