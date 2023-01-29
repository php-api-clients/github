<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GpgKey
{
    public const SCHEMA_JSON = '{"title":"GPG Key","required":["id","primary_key_id","key_id","raw_key","public_key","created_at","expires_at","can_sign","can_encrypt_comms","can_encrypt_storage","can_certify","emails","subkeys","revoked"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"name":{"type":["string","null"],"examples":["Octocat\'s GPG Key"]},"primary_key_id":{"type":["integer","null"]},"key_id":{"type":"string","examples":["3262EFF25BA0D270"]},"public_key":{"type":"string","examples":["xsBNBFayYZ..."]},"emails":{"type":"array","items":{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}},"examples":[{"email":"octocat@users.noreply.github.com","verified":true}]},"subkeys":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]},"revoked":{"type":"boolean"}}},"examples":[{"id":4,"primary_key_id":3,"key_id":"4A595D4C72EE49C7","public_key":"zsBNBFayYZ...","emails":[],"subkeys":[],"can_sign":false,"can_encrypt_comms":true,"can_encrypt_storage":true,"can_certify":false,"created_at":"2016-03-24T11:31:04-06:00","expires_at":null,"revoked":false}]},"can_sign":{"type":"boolean","examples":[true]},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean","examples":[true]},"created_at":{"type":"string","format":"date-time","examples":["2016-03-24T11:31:04-06:00"]},"expires_at":{"type":["string","null"],"format":"date-time"},"revoked":{"type":"boolean","examples":[true]},"raw_key":{"type":["string","null"]}},"description":"A unique encryption key"}';
    public const SCHEMA_TITLE = 'GPG Key';
    public const SCHEMA_DESCRIPTION = 'A unique encryption key';
    public readonly int $id;
    public readonly ?string $name;
    public readonly ?int $primary_key_id;
    public readonly string $key_id;
    public readonly string $public_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Emails>
     */
    public readonly array $emails;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Subkeys>
     */
    public readonly array $subkeys;
    public readonly bool $can_sign;
    public readonly bool $can_encrypt_comms;
    public readonly bool $can_encrypt_storage;
    public readonly bool $can_certify;
    public readonly string $created_at;
    public readonly ?string $expires_at;
    public readonly bool $revoked;
    public readonly ?string $raw_key;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Emails> $emails
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey\Subkeys> $subkeys
     */
    public function __construct(int $id, string $name, int $primary_key_id, string $key_id, string $public_key, array $emails, array $subkeys, bool $can_sign, bool $can_encrypt_comms, bool $can_encrypt_storage, bool $can_certify, string $created_at, string $expires_at, bool $revoked, string $raw_key)
    {
        $this->id = $id;
        $this->name = $name;
        $this->primary_key_id = $primary_key_id;
        $this->key_id = $key_id;
        $this->public_key = $public_key;
        $this->emails = $emails;
        $this->subkeys = $subkeys;
        $this->can_sign = $can_sign;
        $this->can_encrypt_comms = $can_encrypt_comms;
        $this->can_encrypt_storage = $can_encrypt_storage;
        $this->can_certify = $can_certify;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;
        $this->revoked = $revoked;
        $this->raw_key = $raw_key;
    }
}
