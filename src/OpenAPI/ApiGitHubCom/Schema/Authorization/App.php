<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Authorization;

final class App
{
    public const SCHEMA_JSON = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Authorization\\App';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $client_id;
    public readonly string $name;
    public readonly string $url;
    public function __construct(string $client_id, string $name, string $url)
    {
        $this->client_id = $client_id;
        $this->name = $name;
        $this->url = $url;
    }
}
