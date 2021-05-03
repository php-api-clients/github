<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterAuthor
{
    public const SCHEMA_TITLE = 'Porter Author';
    public const SPL_HASH = '00000000084e13850000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Porter Author';
    private ?int $id = null;
    private ?string $remote_id = null;
    private ?string $remote_name = null;
    private ?string $email = null;
    private ?string $name = null;
    private ?string $url = null;
    private ?string $import_url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function remote_id() : ?string
    {
        return $this->remote_id;
    }
    public function remote_name() : ?string
    {
        return $this->remote_name;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function import_url() : ?string
    {
        return $this->import_url;
    }
}
