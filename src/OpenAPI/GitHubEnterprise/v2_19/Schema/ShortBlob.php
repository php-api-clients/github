<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '0000000015935a8b000000001856c88e';
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
