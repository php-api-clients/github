<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecretScanningLocationIssueBody
{
    public const SCHEMA_JSON = '{"required":["issue_body_url"],"type":"object","properties":{"issue_body_url":{"type":"string","description":"The API URL to get the issue where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"]}},"description":"Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue."}';
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
