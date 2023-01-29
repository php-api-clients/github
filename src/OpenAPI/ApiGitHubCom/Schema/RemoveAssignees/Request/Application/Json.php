<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveAssignees\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = 'RemoveAssignees\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
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
