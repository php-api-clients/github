<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '0000000065dd6a86000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    private string $url;
    private string $sha;
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
}
