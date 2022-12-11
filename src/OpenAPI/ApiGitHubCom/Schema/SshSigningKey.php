<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SshSigningKey
{
    public const SCHEMA_TITLE = 'SSH Signing Key';
    public const SCHEMA_DESCRIPTION = 'A public SSH key used to sign Git commits';
    private string $key;
    private int $id;
    private string $title;
    private string $created_at;
    public function key() : string
    {
        return $this->key;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
}
