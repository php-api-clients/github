<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class LabelSearchResultItem
{
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    private int $id;
    private string $node_id;
    private string $url;
    private string $name;
    private string $color;
    private bool $default;
    private ?string $description = null;
    private int $score;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LabelSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LabelSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function color() : string
    {
        return $this->color;
    }
    public function default() : bool
    {
        return $this->default;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function score() : int
    {
        return $this->score;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LabelSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
