<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple;

final class Labels
{
    public const SCHEMA_JSON = '{"required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"description":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PullRequestSimple\\Labels';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $name;
    public readonly string $description;
    public readonly string $color;
    public readonly bool $default;
    public function __construct(int $id, string $node_id, string $url, string $name, string $description, string $color, bool $default)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->color = $color;
        $this->default = $default;
    }
}
