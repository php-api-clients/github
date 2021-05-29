<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequestReviewComment_Created
{
    public const SCHEMA_TITLE       = 'pull_request_review_comment created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/pulls#comments) itself.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequestReviewComment::class)
     */
    private ?PullRequestReviewComment $comment = null;
    private array $pull_request                = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function comment(): ?PullRequestReviewComment
    {
        return $this->comment;
    }

    public function pull_request(): array
    {
        return $this->pull_request;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }
}
