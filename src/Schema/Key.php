<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Key
{
    public const SCHEMA_JSON = '{"title":"Key","required":["key","id","url","title","created_at","verified","read_only"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"url":{"type":"string"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"verified":{"type":"boolean"},"read_only":{"type":"boolean"}},"description":"Key"}';
    public const SCHEMA_TITLE = 'Key';
    public const SCHEMA_DESCRIPTION = 'Key';
    public ?string $key;
    public ?int $id;
    public ?string $url;
    public ?string $title;
    public ?string $created_at;
    public ?bool $verified;
    public ?bool $read_only;
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
