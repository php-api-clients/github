<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest;

final class File
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'Manifest\\File';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The path of the manifest file relative to the root of the Git repository.
     */
    private string $source_location;
    /**
     * The path of the manifest file relative to the root of the Git repository.
     */
    public function source_location() : string
    {
        return $this->source_location;
    }
}