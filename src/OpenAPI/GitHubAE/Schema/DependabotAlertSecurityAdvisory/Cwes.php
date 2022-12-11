<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory;

final class Cwes
{
    public const SCHEMA_TITLE = 'dependabot-alert-security-advisory::cwes';
    public const SCHEMA_DESCRIPTION = 'A CWE weakness assigned to the advisory.';
    /**
     * The unique CWE ID.
     */
    private string $cwe_id;
    /**
     * The short, plain text name of the CWE.
     */
    private string $name;
    /**
     * The unique CWE ID.
     */
    public function cwe_id() : string
    {
        return $this->cwe_id;
    }
    /**
     * The short, plain text name of the CWE.
     */
    public function name() : string
    {
        return $this->name;
    }
}
