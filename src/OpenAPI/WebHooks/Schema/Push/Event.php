<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Push;

final class Event
{
    public const SCHEMA_TITLE = 'push event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The full git ref that was pushed. Example: `refs/heads/main` or `refs/tags/v3.14.1`.
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
    /**
     * Whether this push created the `ref`.
     */
    private bool $created;
    /**
     * Whether this push deleted the `ref`.
     */
    private bool $deleted;
    /**
     * Whether this push was a force push of the `ref`.
     */
    private bool $forced;
    private $base_ref;
    /**
     * URL that shows the changes in this `ref` update, from the `before` commit to the `after` commit. For a newly created `ref` that is directly based on the default branch, this is the comparison between the head of the default branch and the `after` commit. Otherwise, this shows all commits until the `after` commit.
     */
    private string $compare;
    /**
     * An array of commit objects describing the pushed commits. (Pushed commits are all commits that are included in the `compare` between the `before` commit and the `after` commit.) The array includes a maximum of 20 commits. If necessary, you can use the [Commits API](https://docs.github.com/en/rest/reference/repos#commits) to fetch additional commits. This limit is applied to timeline events only and isn't applied to webhook deliveries.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit::class)
     */
    private array $commits = array();
    /**
     * For pushes where `after` is or points to a commit object, an expanded representation of that commit. For pushes where `after` refers to an annotated tag object, an expanded representation of the commit pointed to by the annotated tag.
     */
    private $head_commit;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer $pusher;
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
     * The full git ref that was pushed. Example: `refs/heads/main` or `refs/tags/v3.14.1`.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    public function before() : string
    {
        return $this->before;
    }
    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    public function after() : string
    {
        return $this->after;
    }
    /**
     * Whether this push created the `ref`.
     */
    public function created() : bool
    {
        return $this->created;
    }
    /**
     * Whether this push deleted the `ref`.
     */
    public function deleted() : bool
    {
        return $this->deleted;
    }
    /**
     * Whether this push was a force push of the `ref`.
     */
    public function forced() : bool
    {
        return $this->forced;
    }
    public function base_ref()
    {
        return $this->base_ref;
    }
    /**
     * URL that shows the changes in this `ref` update, from the `before` commit to the `after` commit. For a newly created `ref` that is directly based on the default branch, this is the comparison between the head of the default branch and the `after` commit. Otherwise, this shows all commits until the `after` commit.
     */
    public function compare() : string
    {
        return $this->compare;
    }
    /**
     * An array of commit objects describing the pushed commits. (Pushed commits are all commits that are included in the `compare` between the `before` commit and the `after` commit.) The array includes a maximum of 20 commits. If necessary, you can use the [Commits API](https://docs.github.com/en/rest/reference/repos#commits) to fetch additional commits. This limit is applied to timeline events only and isn't applied to webhook deliveries.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit>
     */
    public function commits() : array
    {
        return $this->commits;
    }
    /**
     * For pushes where `after` is or points to a commit object, an expanded representation of that commit. For pushes where `after` refers to an annotated tag object, an expanded representation of the commit pointed to by the annotated tag.
     */
    public function head_commit()
    {
        return $this->head_commit;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function pusher() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer
    {
        return $this->pusher;
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
