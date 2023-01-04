<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistHistory;

final class ChangeStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'GistHistory\\ChangeStatus';
    public const SCHEMA_DESCRIPTION = '';
    private int $total;
    private int $additions;
    private int $deletions;
    public function total() : int
    {
        return $this->total;
    }
    public function additions() : int
    {
        return $this->additions;
    }
    public function deletions() : int
    {
        return $this->deletions;
    }
}
