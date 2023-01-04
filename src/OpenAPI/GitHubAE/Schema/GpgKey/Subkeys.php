<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GpgKey;

final class Subkeys
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'GpgKey\\Subkeys';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private int $primary_key_id;
    private string $key_id;
    private string $public_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Emails::class)
     */
    private array $emails = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Subkeys>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Subkeys::class)
     */
    private array $subkeys = array();
    private bool $can_sign;
    private bool $can_encrypt_comms;
    private bool $can_encrypt_storage;
    private bool $can_certify;
    private string $created_at;
    private $expires_at;
    private $raw_key;
    public function id() : int
    {
        return $this->id;
    }
    public function primary_key_id() : int
    {
        return $this->primary_key_id;
    }
    public function key_id() : string
    {
        return $this->key_id;
    }
    public function public_key() : string
    {
        return $this->public_key;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Emails>
     */
    public function emails() : array
    {
        return $this->emails;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Subkeys\Subkeys>
     */
    public function subkeys() : array
    {
        return $this->subkeys;
    }
    public function can_sign() : bool
    {
        return $this->can_sign;
    }
    public function can_encrypt_comms() : bool
    {
        return $this->can_encrypt_comms;
    }
    public function can_encrypt_storage() : bool
    {
        return $this->can_encrypt_storage;
    }
    public function can_certify() : bool
    {
        return $this->can_certify;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function expires_at()
    {
        return $this->expires_at;
    }
    public function raw_key()
    {
        return $this->raw_key;
    }
}
