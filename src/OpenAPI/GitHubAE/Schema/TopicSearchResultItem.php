<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TopicSearchResultItem
{
    public const SCHEMA_TITLE = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Topic Search Result Item';
    private string $name;
    private $display_name;
    private $short_description;
    private $description;
    private $created_by;
    private $released;
    private string $created_at;
    private string $updated_at;
    private bool $featured;
    private bool $curated;
    private int $score;
    private $repository_count;
    private $logo_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TopicSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TopicSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    private $related;
    private $aliases;
    public function name() : string
    {
        return $this->name;
    }
    public function display_name()
    {
        return $this->display_name;
    }
    public function short_description()
    {
        return $this->short_description;
    }
    public function description()
    {
        return $this->description;
    }
    public function created_by()
    {
        return $this->created_by;
    }
    public function released()
    {
        return $this->released;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function featured() : bool
    {
        return $this->featured;
    }
    public function curated() : bool
    {
        return $this->curated;
    }
    public function score() : int
    {
        return $this->score;
    }
    public function repository_count()
    {
        return $this->repository_count;
    }
    public function logo_url()
    {
        return $this->logo_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TopicSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function related()
    {
        return $this->related;
    }
    public function aliases()
    {
        return $this->aliases;
    }
}
