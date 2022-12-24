<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PreReceiveEnvironmentDownloadStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}';
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
