<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class References
{
    public const SCHEMA_TITLE = 'dependabot-alert-security-advisory::references';
    public const SCHEMA_DESCRIPTION = 'A link to additional advisory information.';
    /**
     * The URL of the reference.
     */
    private string $url;
    /**
     * The URL of the reference.
     */
    public function url() : string
    {
        return $this->url;
    }
}
