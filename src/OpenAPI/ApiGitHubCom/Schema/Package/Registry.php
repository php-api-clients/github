<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package;

final class Registry
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Package\\Registry';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $about_url;
    public readonly string $name;
    public readonly string $type;
    public readonly string $url;
    public readonly string $vendor;
    public function __construct(string $about_url, string $name, string $type, string $url, string $vendor)
    {
        $this->about_url = $about_url;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
        $this->vendor = $vendor;
    }
}
