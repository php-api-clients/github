<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class DiscussionComment_Deleted
{
    public const SCHEMA_TITLE       = 'discussion_comment deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $comment          = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Discussion::class) */
    private ?Discussion $discussion = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function comment(): array
    {
        return $this->comment;
    }

    public function discussion(): ?Discussion
    {
        return $this->discussion;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }
}
