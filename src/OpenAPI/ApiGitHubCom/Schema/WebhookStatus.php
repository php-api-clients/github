<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookStatus
{
    public const SCHEMA_TITLE = 'status event';
    public const SCHEMA_DESCRIPTION = '';
    private $avatar_url;
    /**
     * An array of branch objects containing the status' SHA. Each branch contains the given SHA, but the SHA may or may not be the head of the branch. The array includes a maximum of 10 branches.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus\Branches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus\Branches::class)
     */
    private array $branches = array();
    private array $commit = array();
    private string $context;
    private string $created_at;
    /**
     * The optional human-readable description added to the status.
     */
    private $description;
    /**
     * An enterprise on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise $enterprise = null;
    /**
     * The unique identifier of the status.
     */
    private int $id;
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation $installation = null;
    private string $name;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple $organization = null;
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository $repository;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $sender;
    /**
     * The Commit SHA.
     */
    private string $sha;
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    private string $state;
    /**
     * The optional link added to the status.
     */
    private $target_url;
    private string $updated_at;
    public function avatar_url()
    {
        return $this->avatar_url;
    }
    /**
     * An array of branch objects containing the status' SHA. Each branch contains the given SHA, but the SHA may or may not be the head of the branch. The array includes a maximum of 10 branches.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus\Branches>
     */
    public function branches() : array
    {
        return $this->branches;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function context() : string
    {
        return $this->context;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The optional human-readable description added to the status.
     */
    public function description()
    {
        return $this->description;
    }
    /**
     * An enterprise on GitHub.
     */
    public function enterprise() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise
    {
        return $this->enterprise;
    }
    /**
     * The unique identifier of the status.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation
    {
        return $this->installation;
    }
    public function name() : string
    {
        return $this->name;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * A repository on GitHub.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * A GitHub user.
     */
    public function sender() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->sender;
    }
    /**
     * The Commit SHA.
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The optional link added to the status.
     */
    public function target_url()
    {
        return $this->target_url;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
