<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningLocationIssueTitle
{
    public const SCHEMA_TITLE = 'secret-scanning-location-issue-title';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_title\' secret scanning location type. This location type shows that a secret was detected in the title of an issue.';
    /**
     * The API URL to get the issue where the secret was detected.
     */
    private string $issue_title_url;
    /**
     * The API URL to get the issue where the secret was detected.
     */
    public function issue_title_url() : string
    {
        return $this->issue_title_url;
    }
}
