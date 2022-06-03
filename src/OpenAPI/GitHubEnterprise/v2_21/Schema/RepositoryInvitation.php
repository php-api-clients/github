<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class RepositoryInvitation
{
    public const SCHEMA_TITLE = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION = 'Repository invitations let you manage who you collaborate with.';
    /**
     * Unique identifier of the repository invitation.
     */
    private int $id;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\MinimalRepository $repository;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $invitee = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $inviter = null;
    /**
     * The permission associated with the invitation.
     */
    private string $permissions;
    private string $created_at;
    /**
     * Whether or not the invitation has expired
     */
    private ?bool $expired = null;
    /**
     * URL for the repository invitation
     */
    private string $url;
    private string $html_url;
    private string $node_id;
    /**
     * Unique identifier of the repository invitation.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Simple User
     */
    public function invitee() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->invitee;
    }
    /**
     * Simple User
     */
    public function inviter() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->inviter;
    }
    /**
     * The permission associated with the invitation.
     */
    public function permissions() : string
    {
        return $this->permissions;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * Whether or not the invitation has expired
     */
    public function expired() : ?bool
    {
        return $this->expired;
    }
    /**
     * URL for the repository invitation
     */
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
