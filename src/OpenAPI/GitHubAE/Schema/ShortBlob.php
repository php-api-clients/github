<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '000000005dfdd90a0000000040885a06';
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
