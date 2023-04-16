<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAlertLocation
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Describe a region within a file for the alert.';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","start_line":13,"end_line":13,"start_column":13,"end_column":13}';

    public function __construct(public ?string $path, #[MapFrom('start_line')] public ?int $startLine, #[MapFrom('end_line')] public ?int $endLine, #[MapFrom('start_column')] public ?int $startColumn, #[MapFrom('end_column')] public ?int $endColumn)
    {
    }
}
