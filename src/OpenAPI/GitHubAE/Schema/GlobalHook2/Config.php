<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GlobalHook2;

final class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'GlobalHook2\\Config';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $content_type;
    private string $insecure_ssl;
    public function url() : string
    {
        return $this->url;
    }
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function insecure_ssl() : string
    {
        return $this->insecure_ssl;
    }
}
