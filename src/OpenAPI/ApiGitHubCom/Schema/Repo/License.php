<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repo;

final class License
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $key;
    public readonly string $name;
    public readonly string $node_id;
    public readonly string $spdx_id;
    public readonly ?string $url;
    public function __construct(string $key, string $name, string $node_id, string $spdx_id, string $url)
    {
        $this->key = $key;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->spdx_id = $spdx_id;
        $this->url = $url;
    }
}
