<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddAssignees;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = 'AddAssignees\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Assignees>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Assignees::class)
     */
    private array $assignees = array();
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Assignees>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
}
