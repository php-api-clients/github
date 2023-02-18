<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issues\RemoveAssignees\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     */
    public ?array $assignees;

    public function __construct(array $assignees)
    {
        $this->assignees = $assignees;
    }
}
