<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookDeploymentStatusCreated
{
    public const SCHEMA_TITLE = 'deployment_status created event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private $check_run;
    /**
     * The [deployment](https://docs.github.com/github-ae@latest/rest/reference/deployments#list-deployments).
     */
    private array $deployment = array();
    /**
     * The [deployment status](https://docs.github.com/github-ae@latest/rest/reference/deployments#list-deployment-statuses).
     */
    private array $deployment_status = array();
    /**
     * An enterprise on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise $enterprise = null;
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
    private $workflow;
    private $workflow_run;
    public function action() : string
    {
        return $this->action;
    }
    public function check_run()
    {
        return $this->check_run;
    }
    /**
     * The [deployment](https://docs.github.com/github-ae@latest/rest/reference/deployments#list-deployments).
     */
    public function deployment() : array
    {
        return $this->deployment;
    }
    /**
     * The [deployment status](https://docs.github.com/github-ae@latest/rest/reference/deployments#list-deployment-statuses).
     */
    public function deployment_status() : array
    {
        return $this->deployment_status;
    }
    /**
     * An enterprise on GitHub.
     */
    public function enterprise() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise
    {
        return $this->enterprise;
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
    public function workflow()
    {
        return $this->workflow;
    }
    public function workflow_run()
    {
        return $this->workflow_run;
    }
}
