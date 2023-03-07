<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GpgKey;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Subkeys
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]},"revoked":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"primary_key_id":13,"key_id":"generated_key_id","public_key":"generated_public_key","emails":[null],"subkeys":[null],"can_sign":false,"can_encrypt_comms":false,"can_encrypt_storage":false,"can_certify":false,"created_at":"generated_created_at","expires_at":"generated_expires_at","raw_key":"generated_raw_key","revoked":false}';
    /**
     * @param ?array<mixed> $emails
     * @param ?array<mixed> $subkeys
     */
    public function __construct(public ?int $id, public ?int $primary_key_id, public ?string $key_id, public ?string $public_key, public ?array $emails, public ?array $subkeys, public ?bool $can_sign, public ?bool $can_encrypt_comms, public ?bool $can_encrypt_storage, public ?bool $can_certify, public ?string $created_at, public ?string $expires_at, public ?string $raw_key, public ?bool $revoked)
    {
    }
}
