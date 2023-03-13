<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class KeySimple
{
    public const SCHEMA_JSON = '{"title":"Key Simple","required":["key","id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"}},"description":"Key Simple"}';
    public const SCHEMA_TITLE = 'Key Simple';
    public const SCHEMA_DESCRIPTION = 'Key Simple';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"key":"generated_key"}';
    public function __construct(public int $id, public string $key)
    {
    }
}
