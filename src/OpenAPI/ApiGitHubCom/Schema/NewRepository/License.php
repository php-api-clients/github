<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository;

final class License
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    private string $key;
    private string $name;
    private string $node_id;
    private string $spdx_id;
    private ?string $url;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function spdx_id() : string
    {
        return $this->spdx_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
