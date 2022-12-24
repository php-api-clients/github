<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CDaca71E314A0Fffbd131Fa3F4A3E4Acf
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_daca71e314a0fffbd131fa3f4a3e4acf';
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
