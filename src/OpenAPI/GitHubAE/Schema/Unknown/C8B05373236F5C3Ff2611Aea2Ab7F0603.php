<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C8B05373236F5C3Ff2611Aea2Ab7F0603
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = 'c_8b05373236f5c3ff2611aea2ab7f0603';
    public const SCHEMA_DESCRIPTION = '';
    private string $context;
    private $app_id;
    public function context() : string
    {
        return $this->context;
    }
    public function app_id()
    {
        return $this->app_id;
    }
}
