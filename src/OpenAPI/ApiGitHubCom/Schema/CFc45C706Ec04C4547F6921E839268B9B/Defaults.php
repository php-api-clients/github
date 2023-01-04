<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CFc45C706Ec04C4547F6921E839268B9B;

final class Defaults
{
    public const SCHEMA_JSON = '{"required":["location","devcontainer_path"],"type":"object","properties":{"location":{"type":"string"},"devcontainer_path":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'CFc45C706Ec04C4547F6921E839268B9B\\Defaults';
    public const SCHEMA_DESCRIPTION = '';
    private string $location;
    private $devcontainer_path;
    public function location() : string
    {
        return $this->location;
    }
    public function devcontainer_path()
    {
        return $this->devcontainer_path;
    }
}
