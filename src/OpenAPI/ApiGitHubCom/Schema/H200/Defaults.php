<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H200;

final class Defaults
{
    public const SCHEMA_JSON = '{"required":["location","devcontainer_path"],"type":"object","properties":{"location":{"type":"string"},"devcontainer_path":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'H200\\Defaults';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $location;
    public readonly ?string $devcontainer_path;
    public function __construct(string $location, string $devcontainer_path)
    {
        $this->location = $location;
        $this->devcontainer_path = $devcontainer_path;
    }
}
