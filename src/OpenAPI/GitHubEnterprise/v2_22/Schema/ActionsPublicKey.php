<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ActionsPublicKey
{
    public const SCHEMA_TITLE = 'ActionsPublicKey';
    public const SPL_HASH = '0000000031ee5ce100000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Actions Secrets.';
    /**
     * The identifier for the key.
     */
    private string $key_id;
    /**
     * The Base64 encoded public key.
     */
    private string $key;
    private int $id;
    private string $url;
    private string $title;
    private string $created_at;
    public function key_id() : string
    {
        return $this->key_id;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
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
