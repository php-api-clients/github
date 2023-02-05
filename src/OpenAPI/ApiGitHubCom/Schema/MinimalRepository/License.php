<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository;

final class License
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MinimalRepository\\License';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $key;
    public readonly string $name;
    public readonly string $spdx_id;
    public readonly string $url;
    public readonly string $node_id;
    public function __construct(string $key, string $name, string $spdx_id, string $url, string $node_id)
    {
        $this->key = $key;
        $this->name = $name;
        $this->spdx_id = $spdx_id;
        $this->url = $url;
        $this->node_id = $node_id;
    }
}
