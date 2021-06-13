<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\IssueComment;

final class Edited
{
    public const SCHEMA_TITLE = 'issue_comment edited event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The changes to the comment.
     */
    private array $changes = array();
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) the comment belongs to.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue $issue;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/issues#comments) itself.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\IssueComment::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\IssueComment $comment;
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
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The changes to the comment.
     */
    public function changes() : array
    {
        return $this->changes;
    }
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) the comment belongs to.
     */
    public function issue() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Issue
    {
        return $this->issue;
    }
    /**
     * The [comment](https://docs.github.com/en/rest/reference/issues#comments) itself.
     */
    public function comment() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\IssueComment
    {
        return $this->comment;
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
    public function installation() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
