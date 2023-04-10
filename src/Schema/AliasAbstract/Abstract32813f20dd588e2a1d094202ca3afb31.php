<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract32813f20dd588e2a1d094202ca3afb31
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public ?int $endLine, public ?string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public ?int $startLine)
    {
    }
}
