<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C80F502D54326362C80D40A924Faa3365
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}}';
    public const SCHEMA_TITLE = 'c_80f502d54326362c80d40a924faa3365';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $insecure_ssl;
    private string $content_type;
    private string $secret;
    public function url() : string
    {
        return $this->url;
    }
    public function insecure_ssl() : string
    {
        return $this->insecure_ssl;
    }
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function secret() : string
    {
        return $this->secret;
    }
}
