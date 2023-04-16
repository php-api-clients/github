<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
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
