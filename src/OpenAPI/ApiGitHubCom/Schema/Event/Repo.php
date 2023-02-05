<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Event;

final class Repo
{
    public const SCHEMA_JSON = '{"required":["id","name","url"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Event\\Repo';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $name;
    public readonly string $url;
    public function __construct(int $id, string $name, string $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
    }
}
