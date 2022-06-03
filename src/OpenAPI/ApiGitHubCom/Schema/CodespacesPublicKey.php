<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespacesPublicKey
{
    public const SCHEMA_TITLE = 'CodespacesPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Codespaces secrets.';
    /**
     * The identifier for the key.
     */
    private string $key_id;
    /**
     * The Base64 encoded public key.
     */
    private string $key;
    private ?int $id = null;
    private ?string $url = null;
    private ?string $title = null;
    private ?string $created_at = null;
    /**
     * The identifier for the key.
     */
    public function key_id() : string
    {
        return $this->key_id;
    }
    /**
     * The Base64 encoded public key.
     */
    public function key() : string
    {
        return $this->key;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
}
