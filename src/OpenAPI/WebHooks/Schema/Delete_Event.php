<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Delete_Event
{
    public const SCHEMA_TITLE       = 'delete event';
    public const SCHEMA_DESCRIPTION = 'A Git branch or tag is deleted.';
    /**
     * The [`git ref`](https://docs.github.com/en/rest/reference/git#get-a-reference) resource.
     */
    private ?string $ref = null;
    /**
     * The type of Git ref object deleted in the repository. Can be either `branch` or `tag`.
     */
    private ?string $ref_type = null;
    /**
     * The pusher type for the event. Can be either `user` or a deploy key.
     */
    private ?string $pusher_type = null;
    /**
     * A git repository
     */
    private array $repository = [];
    private array $sender     = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

    public function ref(): ?string
    {
        return $this->ref;
    }

    public function ref_type(): ?string
    {
        return $this->ref_type;
    }

    public function pusher_type(): ?string
    {
        return $this->pusher_type;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function organization(): array
    {
        return $this->organization;
    }
}
