<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE = 'Short Blob';
    public const SPL_HASH = '00000000252f477e0000000029de5079';
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
