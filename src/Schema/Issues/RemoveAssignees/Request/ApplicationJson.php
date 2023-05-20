<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\RemoveAssignees\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"assignees":["generated","generated"]}';

    /**
     * assignees: Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     */
    public function __construct(public ?array $assignees)
    {
    }
}
