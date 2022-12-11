<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookCheckRunCreated
{
    public const SCHEMA_TITLE = 'Check Run Created Event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * A check performed on the code of a given code change
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRunWithSimpleCheckSuite::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRunWithSimpleCheckSuite $check_run;
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
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository $repository;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $sender;
    public function action() : ?string
    {
        return $this->action;
    }
    /**
     * A check performed on the code of a given code change
     */
    public function check_run() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckRunWithSimpleCheckSuite
    {
        return $this->check_run;
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
     * A repository on GitHub.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * A GitHub user.
     */
    public function sender() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->sender;
    }
}
