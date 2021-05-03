<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '0000000008b9204000000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    private ?string $url = null;
    private ?string $sha = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
}
