<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C3D0B1A33D0E21B9449553352Ee4C6C9D
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}}}}';
    public const SCHEMA_TITLE = 'c_3d0b1a33d0e21b9449553352ee4c6c9d';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    private bool $incomplete_results;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LabelSearchResultItem>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LabelSearchResultItem::class)
     */
    private array $items = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    public function incomplete_results() : bool
    {
        return $this->incomplete_results;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\LabelSearchResultItem>
     */
    public function items() : array
    {
        return $this->items;
    }
}
