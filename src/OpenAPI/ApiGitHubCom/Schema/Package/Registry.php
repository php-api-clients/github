<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package;

final class Registry
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Package\\Registry';
    public const SCHEMA_DESCRIPTION = '';
    private string $about_url;
    private string $name;
    private string $type;
    private string $url;
    private string $vendor;
    public function about_url() : string
    {
        return $this->about_url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function vendor() : string
    {
        return $this->vendor;
    }
}
