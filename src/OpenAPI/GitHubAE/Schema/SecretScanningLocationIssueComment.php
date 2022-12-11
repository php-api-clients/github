<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecretScanningLocationIssueComment
{
    public const SCHEMA_TITLE = 'secret-scanning-location-issue-comment';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue.';
    /**
     * The API URL to get the issue comment where the secret was detected.
     */
    private string $issue_comment_url;
    /**
     * The API URL to get the issue comment where the secret was detected.
     */
    public function issue_comment_url() : string
    {
        return $this->issue_comment_url;
    }
}
