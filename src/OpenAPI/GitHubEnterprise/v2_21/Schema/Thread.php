<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Thread
{
    public const SCHEMA_TITLE       = 'Thread';
    public const SCHEMA_DESCRIPTION = 'Thread';
    private ?string $id             = null;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;
    private array $subject                 = [];
    private ?string $reason                = null;
    private ?bool $unread                  = null;
    private ?string $updated_at            = null;
    private ?string $last_read_at          = null;
    private ?string $url                   = null;
    private ?string $subscription_url      = null;

    public function id(): ?string
    {
        return $this->id;
    }

    /**
     * Minimal Repository
     */
    public function repository(): ?MinimalRepository
    {
        return $this->repository;
    }

    public function subject(): array
    {
        return $this->subject;
    }

    public function reason(): ?string
    {
        return $this->reason;
    }

    public function unread(): ?bool
    {
        return $this->unread;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function last_read_at(): ?string
    {
        return $this->last_read_at;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function subscription_url(): ?string
    {
        return $this->subscription_url;
    }
}
