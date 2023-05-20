<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GistHistory;

final readonly class ChangeStatus
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total":5,"additions":9,"deletions":9}';

    public function __construct(public ?int $total, public ?int $additions, public ?int $deletions)
    {
    }
}
