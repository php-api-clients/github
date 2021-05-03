<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class GpgKey
{
    public const SCHEMA_TITLE = 'GPG Key';
    public const SPL_HASH = '0000000045a095320000000057b08344';
    public const SCHEMA_DESCRIPTION = 'A unique encryption key';
    private ?int $id = null;
    private ?int $primary_key_id = null;
    private ?string $key_id = null;
    private ?string $public_key = null;
    private array $emails = array();
    private array $subkeys = array();
    private ?bool $can_sign = null;
    private ?bool $can_encrypt_comms = null;
    private ?bool $can_encrypt_storage = null;
    private ?bool $can_certify = null;
    private ?string $created_at = null;
    private ?string $expires_at = null;
    private ?string $raw_key = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function primary_key_id() : ?int
    {
        return $this->primary_key_id;
    }
    public function key_id() : ?string
    {
        return $this->key_id;
    }
    public function public_key() : ?string
    {
        return $this->public_key;
    }
    public function emails() : array
    {
        return $this->emails;
    }
    public function subkeys() : array
    {
        return $this->subkeys;
    }
    public function can_sign() : ?bool
    {
        return $this->can_sign;
    }
    public function can_encrypt_comms() : ?bool
    {
        return $this->can_encrypt_comms;
    }
    public function can_encrypt_storage() : ?bool
    {
        return $this->can_encrypt_storage;
    }
    public function can_certify() : ?bool
    {
        return $this->can_certify;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
    public function raw_key() : ?string
    {
        return $this->raw_key;
    }
}
