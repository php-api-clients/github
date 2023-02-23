<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class SecretScanningLocationIssueBody
{
    public const SCHEMA_JSON = '{"required":["issue_body_url"],"type":"object","properties":{"issue_body_url":{"type":"string","description":"The API URL to get the issue where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"]}},"description":"Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_body\' secret scanning location type. This location type shows that a secret was detected in the body of an issue.';
    /**
     * The API URL to get the issue where the secret was detected.
     */
    public ?string $issue_body_url;
    public function __construct(string $issue_body_url)
    {
        $this->issue_body_url = $issue_body_url;
    }
}
