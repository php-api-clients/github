<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

final class Unsuspend
{
    public const SCHEMA_TITLE = 'installation unsuspend event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private $installation;
    /**
     * An array of repository objects that the installation can access.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Unsuspend\Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Unsuspend\Repositories::class)
     */
    private array $repositories = array();
    private null $requester;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    public function installation()
    {
        return $this->installation;
    }
    /**
     * An array of repository objects that the installation can access.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Unsuspend\Repositories>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function requester() : null
    {
        return $this->requester;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
