<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckRun;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CheckSuite
{
    public const SCHEMA_JSON = '{"required":["id"],"type":["object","null"],"properties":{"id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13}';
    public function __construct(public ?int $id)
    {
    }
}
