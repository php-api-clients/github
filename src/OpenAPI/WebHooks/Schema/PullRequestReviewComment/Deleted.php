<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequestReviewComment;

final class Deleted
{
    public const SCHEMA_TITLE = 'pull_request_review_comment deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/pulls#comments) itself.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequestReviewComment::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequestReviewComment $comment;
    private array $pull_request = array();
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The [comment](https://docs.github.com/en/rest/reference/pulls#comments) itself.
     */
    public function comment() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequestReviewComment
    {
        return $this->comment;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
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
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
