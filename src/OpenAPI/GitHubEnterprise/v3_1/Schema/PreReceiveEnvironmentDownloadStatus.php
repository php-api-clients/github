<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_TITLE = 'pre-receive-environment-download-status';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $state;
    private $downloaded_at;
    private $message;
    public function url() : string
    {
        return $this->url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function downloaded_at()
    {
        return $this->downloaded_at;
    }
    public function message()
    {
        return $this->message;
    }
}
