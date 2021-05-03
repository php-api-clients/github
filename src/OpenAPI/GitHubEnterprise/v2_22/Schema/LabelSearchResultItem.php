<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class LabelSearchResultItem
{
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?string $name = null;
    private ?string $color = null;
    private ?bool $default = null;
    private ?string $description = null;
    private ?number $score = null;
    private array $text_matches = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function color() : ?string
    {
        return $this->color;
    }
    public function default() : ?bool
    {
        return $this->default;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function score() : ?number
    {
        return $this->score;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
