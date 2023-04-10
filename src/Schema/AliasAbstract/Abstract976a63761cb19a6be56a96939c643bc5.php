<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract976a63761cb19a6be56a96939c643bc5
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_ms')] public ?int $totalMs)
    {
    }
}
