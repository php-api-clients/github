<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

final class Created
{
    public const SCHEMA_TITLE = 'installation created event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The GitHub App installation.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation;
    /**
     * An array of repository objects that the installation can access.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Created\Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Created\Repositories::class)
     */
    private ?array $repositories = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $requester = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The GitHub App installation.
     */
    public function installation() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation
    {
        return $this->installation;
    }
    /**
     * An array of repository objects that the installation can access.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Created\Repositories>
     */
    public function repositories() : ?array
    {
        return $this->repositories;
    }
    public function requester() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->requester;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
