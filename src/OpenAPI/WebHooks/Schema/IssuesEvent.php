<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class IssuesEvent
{
    public const SCHEMA_TITLE = 'issues_event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The action that was performed.
     */
    private string $action;
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) itself.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue $issue;
    /**
     * The optional user who was assigned or unassigned from the issue.
     */
    private $assignee;
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
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    /**
     * The action that was performed.
     */
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) itself.
     */
    public function issue() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue
    {
        return $this->issue;
    }
    /**
     * The optional user who was assigned or unassigned from the issue.
     */
    public function assignee()
    {
        return $this->assignee;
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
