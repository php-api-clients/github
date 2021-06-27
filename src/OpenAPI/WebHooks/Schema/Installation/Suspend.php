<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

final class Suspend
{
    public const SCHEMA_TITLE = 'installation suspend event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation;
    /**
     * An array of repository objects that the installation can access.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Suspend\Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Suspend\Repositories::class)
     */
    private array $repositories = array();
    private $requester = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    public function installation() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation
    {
        return $this->installation;
    }
    /**
     * An array of repository objects that the installation can access.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Suspend\Repositories>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function requester()
    {
        return $this->requester;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
