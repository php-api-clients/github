<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CCf79D07045B13F3369845610A1A801Fb
{
    public const SCHEMA_JSON = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_cf79d07045b13f3369845610a1a801fb';
    public const SCHEMA_DESCRIPTION = '';
    private string $client_id;
    private string $name;
    private string $url;
    public function client_id() : string
    {
        return $this->client_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
}
