<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotAlertPackage
{
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
