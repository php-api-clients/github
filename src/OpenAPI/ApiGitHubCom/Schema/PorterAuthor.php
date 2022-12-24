<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterAuthor
{
    public const SCHEMA_JSON = '{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}';
    public const SCHEMA_TITLE = 'Porter Author';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    private int $id;
    private string $remote_id;
    private string $remote_name;
    private string $email;
    private string $name;
    private string $url;
    private string $import_url;
    public function id() : int
    {
        return $this->id;
    }
    public function remote_id() : string
    {
        return $this->remote_id;
    }
    public function remote_name() : string
    {
        return $this->remote_name;
    }
    public function email() : string
    {
        return $this->email;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function import_url() : string
    {
        return $this->import_url;
    }
}
