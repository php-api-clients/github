<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractbcf0aa249ce55b8f7911df479f4cd41a
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type_null","value":"generated_value_null"}';
    public function __construct(public string $type, public string $value)
    {
    }
}
