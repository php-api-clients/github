<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepositoryInvitation
{
    public const SCHEMA_TITLE       = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION = 'Repository invitations let you manage who you collaborate with.';
    /**
     * Unique identifier of the repository invitation.
     */
    private ?int $id = null;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;
    private $invitee;
    private $inviter;
    /**
     * The permission associated with the invitation.
     */
    private ?string $permissions = null;
    private ?string $created_at  = null;
    /**
     * Whether or not the invitation has expired
     */
    private ?bool $expired = null;
    /**
     * URL for the repository invitation
     */
    private ?string $url      = null;
    private ?string $html_url = null;
    private ?string $node_id  = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function repository(): ?MinimalRepository
    {
        return $this->repository;
    }

    public function invitee()
    {
        return $this->invitee;
    }

    public function inviter()
    {
        return $this->inviter;
    }

    public function permissions(): ?string
    {
        return $this->permissions;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function expired(): ?bool
    {
        return $this->expired;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }
}
