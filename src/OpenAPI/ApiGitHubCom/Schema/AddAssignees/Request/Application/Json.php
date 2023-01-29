<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddAssignees\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = 'AddAssignees\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Assignees>
     */
    public readonly array $assignees;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Assignees> $assignees
     */
    public function __construct(array $assignees)
    {
        $this->assignees = $assignees;
    }
}
