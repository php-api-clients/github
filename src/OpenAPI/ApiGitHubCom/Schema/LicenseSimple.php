<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class LicenseSimple
{
    public const SCHEMA_JSON        = '{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}';
    public const SCHEMA_TITLE       = 'License Simple';
    public const SCHEMA_DESCRIPTION = 'License Simple';
    public ?string $key;
    public ?string $name;
    public ?string $url;
    public ?string $spdx_id;
    public ?string $node_id;
    public string $html_url;

    public function __construct(string $key, string $name, string $url, string $spdx_id, string $node_id, string $html_url)
    {
        $this->key      = $key;
        $this->name     = $name;
        $this->url      = $url;
        $this->spdx_id  = $spdx_id;
        $this->node_id  = $node_id;
        $this->html_url = $html_url;
    }
}
