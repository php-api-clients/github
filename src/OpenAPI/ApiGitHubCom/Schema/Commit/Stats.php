<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Stats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Commit\\Stats';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $additions;
    public readonly int $deletions;
    public readonly int $total;
    public function __construct(int $additions, int $deletions, int $total)
    {
        $this->additions = $additions;
        $this->deletions = $deletions;
        $this->total = $total;
    }
}
