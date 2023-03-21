<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateTagProtection\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["pattern"],"type":"object","properties":{"pattern":{"type":"string","description":"An optional glob pattern to match against when enforcing tag protection."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pattern":"generated_pattern_null"}';
    /**
     * pattern: An optional glob pattern to match against when enforcing tag protection.
     */
    public function __construct(public string $pattern)
    {
    }
}
