<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistHistory;

final class ChangeStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'GistHistory\\ChangeStatus';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total;
    public readonly int $additions;
    public readonly int $deletions;
    public function __construct(int $total, int $additions, int $deletions)
    {
        $this->total = $total;
        $this->additions = $additions;
        $this->deletions = $deletions;
    }
}
