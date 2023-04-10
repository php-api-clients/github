<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class SecretScanningLocationIssueComment
{
    public const SCHEMA_JSON = '{"required":["issue_comment_url"],"type":"object","properties":{"issue_comment_url":{"type":"string","description":"The API URL to get the issue comment where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"]}},"description":"Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on an issue.';
    public const SCHEMA_EXAMPLE_DATA = '{"issue_comment_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"}';
    /**
     * issueCommentUrl: The API URL to get the issue comment where the secret was detected.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public string $issueCommentUrl)
    {
    }
}
