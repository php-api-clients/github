<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\MinimalRepository;

final readonly class License
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $key;
    public ?string $name;
    public ?string $spdx_id;
    public ?string $url;
    public ?string $node_id;
    public function __construct(string $key, string $name, string $spdx_id, string $url, string $node_id)
    {
        $this->key = $key;
        $this->name = $name;
        $this->spdx_id = $spdx_id;
        $this->url = $url;
        $this->node_id = $node_id;
    }
}
