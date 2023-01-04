<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GpgKey
{
    public const SCHEMA_JSON = '{"title":"GPG Key","required":["id","primary_key_id","key_id","raw_key","public_key","created_at","expires_at","can_sign","can_encrypt_comms","can_encrypt_storage","can_certify","emails","subkeys","revoked"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"name":{"type":["string","null"],"examples":["Octocat\'s GPG Key"]},"primary_key_id":{"type":["integer","null"]},"key_id":{"type":"string","examples":["3262EFF25BA0D270"]},"public_key":{"type":"string","examples":["xsBNBFayYZ..."]},"emails":{"type":"array","items":{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}},"examples":[{"email":"octocat@users.noreply.github.com","verified":true}]},"subkeys":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]},"revoked":{"type":"boolean"}}},"examples":[{"id":4,"primary_key_id":3,"key_id":"4A595D4C72EE49C7","public_key":"zsBNBFayYZ...","emails":[],"subkeys":[],"can_sign":false,"can_encrypt_comms":true,"can_encrypt_storage":true,"can_certify":false,"created_at":"2016-03-24T11:31:04-06:00","expires_at":null,"revoked":false}]},"can_sign":{"type":"boolean","examples":[true]},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean","examples":[true]},"created_at":{"type":"string","format":"date-time","examples":["2016-03-24T11:31:04-06:00"]},"expires_at":{"type":["string","null"],"format":"date-time"},"revoked":{"type":"boolean","examples":[true]},"raw_key":{"type":["string","null"]}},"description":"A unique encryption key"}';
    public const SCHEMA_TITLE = 'GPG Key';
    public const SCHEMA_DESCRIPTION = 'A unique encryption key';
    private int $id;
    private ?string $name = null;
    private ?int $primary_key_id;
    private string $key_id;
    private string $public_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Emails::class)
     */
    private array $emails = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Subkeys>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Subkeys::class)
     */
    private array $subkeys = array();
    private bool $can_sign;
    private bool $can_encrypt_comms;
    private bool $can_encrypt_storage;
    private bool $can_certify;
    private string $created_at;
    private ?string $expires_at;
    private bool $revoked;
    private ?string $raw_key;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function primary_key_id() : ?int
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Emails>
     */
    public function emails() : array
    {
        return $this->emails;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Subkeys>
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
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
    public function revoked() : bool
    {
        return $this->revoked;
    }
    public function raw_key() : ?string
    {
        return $this->raw_key;
    }
}
