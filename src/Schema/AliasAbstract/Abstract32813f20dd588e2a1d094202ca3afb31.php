<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract32813f20dd588e2a1d094202ca3afb31
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13}';

    public function __construct(#[MapFrom('end_column')] public ?int $endColumn, #[MapFrom('end_line')] public ?int $endLine, public ?string $path, #[MapFrom('start_column')] public ?int $startColumn, #[MapFrom('start_line')] public ?int $startLine)
    {
    }
}
