<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H200;

final class Defaults
{
    public const SCHEMA_JSON = '{"required":["location","devcontainer_path"],"type":"object","properties":{"location":{"type":"string"},"devcontainer_path":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'H200\\Defaults';
    public const SCHEMA_DESCRIPTION = '';
    private string $location;
    private ?string $devcontainer_path;
    public function location() : string
    {
        return $this->location;
    }
    public function devcontainer_path() : ?string
    {
        return $this->devcontainer_path;
    }
}
