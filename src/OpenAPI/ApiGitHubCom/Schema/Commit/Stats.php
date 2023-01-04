<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Stats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Commit\\Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $additions;
    private int $deletions;
    private int $total;
    public function additions() : int
    {
        return $this->additions;
    }
    public function deletions() : int
    {
        return $this->deletions;
    }
    public function total() : int
    {
        return $this->total;
    }
}
