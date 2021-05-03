<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class LabelSearchResultItem
{
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SPL_HASH = '0000000031ee56a500000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    private int $id;
    private string $node_id;
    private string $url;
    private string $name;
    private string $color;
    private bool $default;
    private string $description;
    private number $score;
    private array $text_matches;
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
    public function description() : string
    {
        return $this->description;
    }
    public function score() : number
    {
        return $this->score;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
