<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class PorterAuthor
{
    public const SCHEMA_JSON = '{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}';
    public const SCHEMA_TITLE = 'Porter Author';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    public ?int $id;
    public ?string $remote_id;
    public ?string $remote_name;
    public ?string $email;
    public ?string $name;
    public ?string $url;
    public ?string $import_url;
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
