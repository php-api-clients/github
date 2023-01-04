<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Event;

final class Repo
{
    public const SCHEMA_JSON = '{"required":["id","name","url"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Event\\Repo';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $url;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
}
