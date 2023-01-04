<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class NugetMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE = 'PackageVersion\\NugetMetadata';
    public const SCHEMA_DESCRIPTION = '';
    private $id;
    private string $name;
    private $value;
    public function id()
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function value()
    {
        return $this->value;
    }
}
