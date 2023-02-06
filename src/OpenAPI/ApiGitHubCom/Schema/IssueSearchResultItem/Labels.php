<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueSearchResultItem;

final class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'IssueSearchResultItem\\Labels';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $name;
    public readonly string $color;
    public readonly bool $default;
    public readonly ?string $description;
    public function __construct(int $id, string $node_id, string $url, string $name, string $color, bool $default, string $description)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->color = $color;
        $this->default = $default;
        $this->description = $description;
    }
}
