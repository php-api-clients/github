<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '00000000252f46300000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Page Build Status';
    private ?string $url = null;
    private ?string $status = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function status() : ?string
    {
        return $this->status;
    }
}
