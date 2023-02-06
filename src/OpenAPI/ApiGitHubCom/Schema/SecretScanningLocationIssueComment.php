<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningLocationIssueComment
{
    public const SCHEMA_JSON = '{"required":["issue_comment_url"],"type":"object","properties":{"issue_comment_url":{"type":"string","description":"The API URL to get the issue comment where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"]}},"description":"Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue."}';
    public const SCHEMA_EXAMPLE = '{"issue_comment_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"}';
    public const SCHEMA_TITLE = 'secret-scanning-location-issue-comment';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue.';
    /**
     * The API URL to get the issue comment where the secret was detected.
     */
    public readonly string $issue_comment_url;
    public function __construct(string $issue_comment_url)
    {
        $this->issue_comment_url = $issue_comment_url;
    }
}
