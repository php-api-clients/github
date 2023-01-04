<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GlobalHook;

final class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'GlobalHook\\Config';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $content_type;
    private string $insecure_ssl;
    private string $secret;
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
    public function secret() : string
    {
        return $this->secret;
    }
}
