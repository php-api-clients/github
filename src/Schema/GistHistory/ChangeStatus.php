<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GistHistory;

final readonly class ChangeStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total;
    public ?int $additions;
    public ?int $deletions;
    public function __construct(int $total, int $additions, int $deletions)
    {
        $this->total = $total;
        $this->additions = $additions;
        $this->deletions = $deletions;
    }
}
