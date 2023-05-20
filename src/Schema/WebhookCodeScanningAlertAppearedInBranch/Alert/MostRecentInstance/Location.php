<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Location
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"end_column":10,"end_line":8,"path":"generated","start_column":12,"start_line":10}';

    public function __construct(#[MapFrom('end_column')] public ?int $endColumn, #[MapFrom('end_line')] public ?int $endLine, public ?string $path, #[MapFrom('start_column')] public ?int $startColumn, #[MapFrom('start_line')] public ?int $startLine)
    {
    }
}
