<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateTagProtection\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
