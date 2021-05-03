<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_TITLE = 'pre-receive-environment-download-status';
    public const SPL_HASH = '0000000008b92d0f00000000412ebbda';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?string $state = null;
    private ?string $downloaded_at = null;
    private ?string $message = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function downloaded_at() : ?string
    {
        return $this->downloaded_at;
    }
    public function message() : ?string
    {
        return $this->message;
    }
}
