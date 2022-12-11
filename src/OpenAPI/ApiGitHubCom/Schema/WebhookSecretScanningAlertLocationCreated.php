<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookSecretScanningAlertLocationCreated
{
    public const SCHEMA_TITLE = 'Secret Scanning Alert Location Created Event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert $alert;
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation $location;
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
    public function action() : ?string
    {
        return $this->action;
    }
    public function alert() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert
    {
        return $this->alert;
    }
    /**
     * The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleInstallation
    {
        return $this->installation;
    }
    public function location() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningLocation
    {
        return $this->location;
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
}
