<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB6C548Eab5E6E0949E40De256103C287
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'c_b6c548eab5e6e0949e40de256103c287';
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
