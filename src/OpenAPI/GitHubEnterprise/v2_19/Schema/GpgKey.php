<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\GpgKey\Emails;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\GpgKey\Subkeys;

final class GpgKey
{
    public const SCHEMA_TITLE       = 'GPG Key';
    public const SCHEMA_DESCRIPTION = 'A unique encryption key';
    private int $id;
    private int $primary_key_id;
    private string $key_id;
    private string $public_key;
    private array $emails  = [];
    private array $subkeys = [];
    private bool $can_sign;
    private bool $can_encrypt_comms;
    private bool $can_encrypt_storage;
    private bool $can_certify;
    private string $created_at;
    private string $expires_at;
    private string $raw_key;

    public function id(): int
    {
        return $this->id;
    }

    public function primary_key_id(): int
    {
        return $this->primary_key_id;
    }

    public function key_id(): string
    {
        return $this->key_id;
    }

    public function public_key(): string
    {
        return $this->public_key;
    }

    /**
     * @return array<Emails>
     */
    public function emails(): array
    {
        return $this->emails;
    }

    /**
     * @return array<Subkeys>
     */
    public function subkeys(): array
    {
        return $this->subkeys;
    }

    public function can_sign(): bool
    {
        return $this->can_sign;
    }

    public function can_encrypt_comms(): bool
    {
        return $this->can_encrypt_comms;
    }

    public function can_encrypt_storage(): bool
    {
        return $this->can_encrypt_storage;
    }

    public function can_certify(): bool
    {
        return $this->can_certify;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function expires_at(): string
    {
        return $this->expires_at;
    }

    public function raw_key(): string
    {
        return $this->raw_key;
    }
}
