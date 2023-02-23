<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Authorization;

final readonly class App
{
    public const SCHEMA_JSON = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $client_id;
    public ?string $name;
    public ?string $url;
    public function __construct(string $client_id, string $name, string $url)
    {
        $this->client_id = $client_id;
        $this->name = $name;
        $this->url = $url;
    }
}
