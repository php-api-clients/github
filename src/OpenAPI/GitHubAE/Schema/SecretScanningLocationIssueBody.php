<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecretScanningLocationIssueBody
{
    public const SCHEMA_TITLE = 'secret-scanning-location-issue-body';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue.';
    /**
     * The API URL to get the issue where the secret was detected.
     */
    private string $issue_body_url;
    /**
     * The API URL to get the issue where the secret was detected.
     */
    public function issue_body_url() : string
    {
        return $this->issue_body_url;
    }
}
