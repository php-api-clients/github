<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GpgKey;

final class Subkeys
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]},"revoked":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'GpgKey\\Subkeys';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly int $primary_key_id;
    public readonly string $key_id;
    public readonly string $public_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Subkeys\Emails>
     */
    public readonly array $emails;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Subkeys\Subkeys>
     */
    public readonly array $subkeys;
    public readonly bool $can_sign;
    public readonly bool $can_encrypt_comms;
    public readonly bool $can_encrypt_storage;
    public readonly bool $can_certify;
    public readonly string $created_at;
    public readonly ?string $expires_at;
    public readonly ?string $raw_key;
    public readonly bool $revoked;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Subkeys\Emails> $emails
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Subkeys\Subkeys> $subkeys
     */
    public function __construct(int $id, int $primary_key_id, string $key_id, string $public_key, array $emails, array $subkeys, bool $can_sign, bool $can_encrypt_comms, bool $can_encrypt_storage, bool $can_certify, string $created_at, string $expires_at, string $raw_key, bool $revoked)
    {
        $this->id = $id;
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
        $this->raw_key = $raw_key;
        $this->revoked = $revoked;
    }
}
