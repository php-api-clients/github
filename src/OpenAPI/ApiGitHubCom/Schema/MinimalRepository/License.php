<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository;

final class License
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MinimalRepository\\License';
    public const SCHEMA_DESCRIPTION = '';
    private string $key;
    private string $name;
    private string $spdx_id;
    private string $url;
    private string $node_id;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function spdx_id() : string
    {
        return $this->spdx_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
