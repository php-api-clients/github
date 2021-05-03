<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '000000000c1ced9a0000000065732ccc';
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
