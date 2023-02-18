<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionTransferred\Changes\NewRepository;

final readonly class License
{
    public const SCHEMA_JSON        = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE       = 'License';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $key;
    public ?string $name;
    public ?string $node_id;
    public ?string $spdx_id;
    public ?string $url;

    public function __construct(string $key, string $name, string $node_id, string $spdx_id, string $url)
    {
        $this->key     = $key;
        $this->name    = $name;
        $this->node_id = $node_id;
        $this->spdx_id = $spdx_id;
        $this->url     = $url;
    }
}
