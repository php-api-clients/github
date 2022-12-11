<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookPing
{
    public const SCHEMA_TITLE = 'webhook-ping';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The webhook that is being pinged
     */
    private array $hook = array();
    /**
     * The ID of the webhook that triggered the ping.
     */
    private int $hook_id;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple $organization;
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository $repository;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $sender;
    /**
     * Random string of GitHub zen.
     */
    private string $zen;
    /**
     * The webhook that is being pinged
     */
    public function hook() : array
    {
        return $this->hook;
    }
    /**
     * The ID of the webhook that triggered the ping.
     */
    public function hook_id() : int
    {
        return $this->hook_id;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * A repository on GitHub.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * A GitHub user.
     */
    public function sender() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->sender;
    }
    /**
     * Random string of GitHub zen.
     */
    public function zen() : string
    {
        return $this->zen;
    }
}
