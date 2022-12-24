<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class DependabotAlertPackage
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'dependabot-alert-package';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable package.';
    /**
     * The package's language or package management ecosystem.
     */
    private string $ecosystem;
    /**
     * The unique package name within its ecosystem.
     */
    private string $name;
    /**
     * The package's language or package management ecosystem.
     */
    public function ecosystem() : string
    {
        return $this->ecosystem;
    }
    /**
     * The unique package name within its ecosystem.
     */
    public function name() : string
    {
        return $this->name;
    }
}
