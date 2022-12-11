<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookMembershipRemoved
{
    public const SCHEMA_TITLE = 'membership removed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
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
    private $member;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple $organization;
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository $repository = null;
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    private string $scope;
    private $sender;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private array $team = array();
    public function action() : string
    {
        return $this->action;
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
    public function member()
    {
        return $this->member;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * A repository on GitHub.
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    public function scope() : string
    {
        return $this->scope;
    }
    public function sender()
    {
        return $this->sender;
    }
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function team() : array
    {
        return $this->team;
    }
}
