<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook;

final class ScriptRepository
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"full_name":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'PreReceiveHook\\ScriptRepository';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $full_name;
    private string $url;
    private string $html_url;
    public function id() : int
    {
        return $this->id;
    }
    public function full_name() : string
    {
        return $this->full_name;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
