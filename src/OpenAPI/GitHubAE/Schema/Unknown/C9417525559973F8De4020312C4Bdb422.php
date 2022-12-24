<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9417525559973F8De4020312C4Bdb422
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'c_9417525559973f8de4020312c4bdb422';
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
