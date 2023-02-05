<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgHook;

final class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}}';
    public const SCHEMA_TITLE = 'OrgHook\\Config';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly string $insecure_ssl;
    public readonly string $content_type;
    public readonly string $secret;
    public function __construct(string $url, string $insecure_ssl, string $content_type, string $secret)
    {
        $this->url = $url;
        $this->insecure_ssl = $insecure_ssl;
        $this->content_type = $content_type;
        $this->secret = $secret;
    }
}
