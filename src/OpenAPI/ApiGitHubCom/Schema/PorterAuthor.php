<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterAuthor
{
    public const SCHEMA_JSON = '{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Porter Author';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    public readonly int $id;
    public readonly string $remote_id;
    public readonly string $remote_name;
    public readonly string $email;
    public readonly string $name;
    public readonly string $url;
    public readonly string $import_url;
    public function __construct(int $id, string $remote_id, string $remote_name, string $email, string $name, string $url, string $import_url)
    {
        $this->id = $id;
        $this->remote_id = $remote_id;
        $this->remote_name = $remote_name;
        $this->email = $email;
        $this->name = $name;
        $this->url = $url;
        $this->import_url = $import_url;
    }
}
