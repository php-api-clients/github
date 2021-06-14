<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issues;

final class Edited
{
    public const SCHEMA_TITLE = 'issues edited event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue $issue;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label $label = null;
    /**
     * The changes to the issue.
     */
    private array $changes = array();
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    public function action() : string
    {
        return $this->action;
    }
    public function issue() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue
    {
        return $this->issue;
    }
    public function label() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label
    {
        return $this->label;
    }
    /**
     * The changes to the issue.
     */
    public function changes() : array
    {
        return $this->changes;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
    /**
     * Installation
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
