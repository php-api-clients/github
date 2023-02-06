<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DeployKey
{
    public const SCHEMA_JSON = '{"title":"Deploy Key","required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"url":{"type":"string"},"title":{"type":"string"},"verified":{"type":"boolean"},"created_at":{"type":"string"},"read_only":{"type":"boolean"},"added_by":{"type":["string","null"]},"last_used":{"type":["string","null"]}},"description":"An SSH key granting access to a single repository."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Deploy Key';
    public const SCHEMA_DESCRIPTION = 'An SSH key granting access to a single repository.';
    public readonly int $id;
    public readonly string $key;
    public readonly string $url;
    public readonly string $title;
    public readonly bool $verified;
    public readonly string $created_at;
    public readonly bool $read_only;
    public readonly ?string $added_by;
    public readonly ?string $last_used;
    public function __construct(int $id, string $key, string $url, string $title, bool $verified, string $created_at, bool $read_only, string $added_by, string $last_used)
    {
        $this->id = $id;
        $this->key = $key;
        $this->url = $url;
        $this->title = $title;
        $this->verified = $verified;
        $this->created_at = $created_at;
        $this->read_only = $read_only;
        $this->added_by = $added_by;
        $this->last_used = $last_used;
    }
}
