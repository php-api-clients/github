<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ActionsPublicKey
{
    public const SCHEMA_TITLE       = 'ActionsPublicKey';
    public const SCHEMA_DESCRIPTION = 'The public key used for setting Actions Secrets.';
    /**
     * The identifier for the key.
     */
    private ?string $key_id = null;
    /**
     * The Base64 encoded public key.
     */
    private ?string $key        = null;
    private ?int $id            = null;
    private ?string $url        = null;
    private ?string $title      = null;
    private ?string $created_at = null;

    public function key_id(): ?string
    {
        return $this->key_id;
    }

    public function key(): ?string
    {
        return $this->key;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function title(): ?string
    {
        return $this->title;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }
}
