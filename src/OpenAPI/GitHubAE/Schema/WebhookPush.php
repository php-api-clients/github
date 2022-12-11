<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookPush
{
    public const SCHEMA_TITLE = 'push event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    private string $after;
    private $base_ref;
    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    private string $before;
    /**
     * An array of commit objects describing the pushed commits. (Pushed commits are all commits that are included in the `compare` between the `before` commit and the `after` commit.) The array includes a maximum of 20 commits. If necessary, you can use the [Commits API](https://docs.github.com/github-ae@latest/rest/reference/repos#commits) to fetch additional commits. This limit is applied to timeline events only and isn't applied to webhook deliveries.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPush\Commits>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPush\Commits::class)
     */
    private array $commits = array();
    /**
     * URL that shows the changes in this `ref` update, from the `before` commit to the `after` commit. For a newly created `ref` that is directly based on the default branch, this is the comparison between the head of the default branch and the `after` commit. Otherwise, this shows all commits until the `after` commit.
     */
    private string $compare;
    /**
     * Whether this push created the `ref`.
     */
    private bool $created;
    /**
     * Whether this push deleted the `ref`.
     */
    private bool $deleted;
    /**
     * An enterprise on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise $enterprise = null;
    /**
     * Whether this push was a force push of the `ref`.
     */
    private bool $forced;
    private $head_commit;
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleInstallation::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleInstallation $installation = null;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple $organization = null;
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $pusher = array();
    /**
     * The full git ref that was pushed. Example: `refs/heads/main` or `refs/tags/v3.14.1`.
     */
    private string $ref;
    /**
     * A git repository
     */
    private array $repository = array();
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $sender = null;
    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    public function after() : string
    {
        return $this->after;
    }
    public function base_ref()
    {
        return $this->base_ref;
    }
    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    public function before() : string
    {
        return $this->before;
    }
    /**
     * An array of commit objects describing the pushed commits. (Pushed commits are all commits that are included in the `compare` between the `before` commit and the `after` commit.) The array includes a maximum of 20 commits. If necessary, you can use the [Commits API](https://docs.github.com/github-ae@latest/rest/reference/repos#commits) to fetch additional commits. This limit is applied to timeline events only and isn't applied to webhook deliveries.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPush\Commits>
     */
    public function commits() : array
    {
        return $this->commits;
    }
    /**
     * URL that shows the changes in this `ref` update, from the `before` commit to the `after` commit. For a newly created `ref` that is directly based on the default branch, this is the comparison between the head of the default branch and the `after` commit. Otherwise, this shows all commits until the `after` commit.
     */
    public function compare() : string
    {
        return $this->compare;
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
     * An enterprise on GitHub.
     */
    public function enterprise() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise
    {
        return $this->enterprise;
    }
    /**
     * Whether this push was a force push of the `ref`.
     */
    public function forced() : bool
    {
        return $this->forced;
    }
    public function head_commit()
    {
        return $this->head_commit;
    }
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleInstallation
    {
        return $this->installation;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function pusher() : array
    {
        return $this->pusher;
    }
    /**
     * The full git ref that was pushed. Example: `refs/heads/main` or `refs/tags/v3.14.1`.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * A git repository
     */
    public function repository() : array
    {
        return $this->repository;
    }
    /**
     * A GitHub user.
     */
    public function sender() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->sender;
    }
}
