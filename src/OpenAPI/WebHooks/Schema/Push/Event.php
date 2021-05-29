<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Push;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Event
{
    public const SCHEMA_TITLE       = 'push event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The full git ref that was pushed. Example: `refs/heads/main`.
     */
    private string $ref;
    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    private string $before;
    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    private string $after;
    private bool $created;
    private bool $deleted;
    private bool $forced;
    private $base_ref;
    private string $compare;
    /**
     * An array of commit objects describing the pushed commits.
     */
    private array $commits = [];
    private $head_commit;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private Repository $repository;
    /**
     * Metaproperties for Git author/committer information.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private Committer $pusher;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization;

    /**
     * The full git ref that was pushed. Example: `refs/heads/main`.
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    public function before(): string
    {
        return $this->before;
    }

    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    public function after(): string
    {
        return $this->after;
    }

    public function created(): bool
    {
        return $this->created;
    }

    public function deleted(): bool
    {
        return $this->deleted;
    }

    public function forced(): bool
    {
        return $this->forced;
    }

    public function base_ref()
    {
        return $this->base_ref;
    }

    public function compare(): string
    {
        return $this->compare;
    }

    /**
     * An array of commit objects describing the pushed commits.
     *
     * @return array<Commit>
     */
    public function commits(): array
    {
        return $this->commits;
    }

    public function head_commit()
    {
        return $this->head_commit;
    }

    /**
     * A git repository
     */
    public function repository(): Repository
    {
        return $this->repository;
    }

    /**
     * Metaproperties for Git author/committer information.
     */
    public function pusher(): Committer
    {
        return $this->pusher;
    }

    public function sender(): User
    {
        return $this->sender;
    }

    /**
     * Installation
     */
    public function installation(): InstallationLite
    {
        return $this->installation;
    }

    public function organization(): Organization
    {
        return $this->organization;
    }
}
