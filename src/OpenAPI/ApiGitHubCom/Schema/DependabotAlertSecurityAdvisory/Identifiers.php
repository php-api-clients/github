<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class Identifiers
{
    public const SCHEMA_TITLE = 'dependabot-alert-security-advisory::identifiers';
    public const SCHEMA_DESCRIPTION = 'An advisory identifier.';
    /**
     * The type of advisory identifier.
     */
    private string $type;
    /**
     * The value of the advisory identifer.
     */
    private string $value;
    /**
     * The type of advisory identifier.
     */
    public function type() : string
    {
        return $this->type;
    }
    /**
     * The value of the advisory identifer.
     */
    public function value() : string
    {
        return $this->value;
    }
}
