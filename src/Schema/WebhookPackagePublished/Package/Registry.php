<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPackagePublished\Package;

final readonly class Registry
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $about_url;
    public ?string $name;
    public ?string $type;
    public ?string $url;
    public ?string $vendor;
    public function __construct(string $about_url, string $name, string $type, string $url, string $vendor)
    {
        $this->about_url = $about_url;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
        $this->vendor = $vendor;
    }
}
