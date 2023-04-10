<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class IssueEventRename
{
    public const SCHEMA_JSON = '{"title":"Issue Event Rename","required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}},"description":"Issue Event Rename"}';
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SCHEMA_DESCRIPTION = 'Issue Event Rename';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null","to":"generated_to_null"}';
    public function __construct(public string $from, public string $to)
    {
    }
}
