<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_TITLE = 'pre-receive-environment-download-status';
    public const SPL_HASH = '000000001f778435000000002b0b9da2';
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
