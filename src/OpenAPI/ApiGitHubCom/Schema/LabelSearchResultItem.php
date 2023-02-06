<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class LabelSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $name;
    public readonly string $color;
    public readonly bool $default;
    public readonly ?string $description;
    public readonly int $score;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches>
     */
    public readonly array $text_matches;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches> $text_matches
     */
    public function __construct(int $id, string $node_id, string $url, string $name, string $color, bool $default, string $description, int $score, array $text_matches)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->color = $color;
        $this->default = $default;
        $this->description = $description;
        $this->score = $score;
        $this->text_matches = $text_matches;
    }
}
