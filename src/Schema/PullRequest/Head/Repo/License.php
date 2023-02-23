<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PullRequest\Head\Repo;

final readonly class License
{
    public const SCHEMA_JSON = '{"required":["key","name","url","spdx_id","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"url":{"type":["string","null"],"format":"uri"},"spdx_id":{"type":["string","null"]},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $key;
    public ?string $name;
    public ?string $url;
    public ?string $spdx_id;
    public ?string $node_id;
    public function __construct(string $key, string $name, string $url, string $spdx_id, string $node_id)
    {
        $this->key = $key;
        $this->name = $name;
        $this->url = $url;
        $this->spdx_id = $spdx_id;
        $this->node_id = $node_id;
    }
}
