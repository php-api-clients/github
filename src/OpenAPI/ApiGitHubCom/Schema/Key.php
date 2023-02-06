<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Key
{
    public const SCHEMA_JSON = '{"title":"Key","required":["key","id","url","title","created_at","verified","read_only"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"url":{"type":"string"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"verified":{"type":"boolean"},"read_only":{"type":"boolean"}},"description":"Key"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Key';
    public const SCHEMA_DESCRIPTION = 'Key';
    public readonly string $key;
    public readonly int $id;
    public readonly string $url;
    public readonly string $title;
    public readonly string $created_at;
    public readonly bool $verified;
    public readonly bool $read_only;
    public function __construct(string $key, int $id, string $url, string $title, string $created_at, bool $verified, bool $read_only)
    {
        $this->key = $key;
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
        $this->created_at = $created_at;
        $this->verified = $verified;
        $this->read_only = $read_only;
    }
}
