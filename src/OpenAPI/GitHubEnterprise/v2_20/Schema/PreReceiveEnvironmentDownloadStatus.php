<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_TITLE = 'pre-receive-environment-download-status';
    public const SPL_HASH = '0000000037ddb0860000000010a967e8';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $state;
    private string $downloaded_at;
    private string $message;
    public function url() : string
    {
        return $this->url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function downloaded_at() : string
    {
        return $this->downloaded_at;
    }
    public function message() : string
    {
        return $this->message;
    }
}
