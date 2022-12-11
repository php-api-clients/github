<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotAlertWithRepository
{
    public const SCHEMA_TITLE = 'dependabot-alert-with-repository';
    public const SCHEMA_DESCRIPTION = 'A Dependabot alert.';
    /**
     * The security alert number.
     */
    private int $number;
    /**
     * The state of the Dependabot alert.
     */
    private string $state;
    /**
     * Details for the vulnerable dependency.
     */
    private array $dependency = array();
    /**
     * Details for the GitHub Security Advisory.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory $security_advisory;
    /**
     * Details pertaining to one vulnerable version range for the advisory.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability $security_vulnerability;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $updated_at;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $dismissed_at;
    private $dismissed_by;
    /**
     * The reason that the alert was dismissed.
     */
    private $dismissed_reason;
    /**
     * An optional comment associated with the alert's dismissal.
     */
    private $dismissed_comment;
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $fixed_at;
    /**
     * A GitHub repository.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository $repository;
    /**
     * The security alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * The state of the Dependabot alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Details for the vulnerable dependency.
     */
    public function dependency() : array
    {
        return $this->dependency;
    }
    /**
     * Details for the GitHub Security Advisory.
     */
    public function security_advisory() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory
    {
        return $this->security_advisory;
    }
    /**
     * Details pertaining to one vulnerable version range for the advisory.
     */
    public function security_vulnerability() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability
    {
        return $this->security_vulnerability;
    }
    /**
     * The REST API URL of the alert resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function dismissed_at()
    {
        return $this->dismissed_at;
    }
    public function dismissed_by()
    {
        return $this->dismissed_by;
    }
    /**
     * The reason that the alert was dismissed.
     */
    public function dismissed_reason()
    {
        return $this->dismissed_reason;
    }
    /**
     * An optional comment associated with the alert's dismissal.
     */
    public function dismissed_comment()
    {
        return $this->dismissed_comment;
    }
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function fixed_at()
    {
        return $this->fixed_at;
    }
    /**
     * A GitHub repository.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository
    {
        return $this->repository;
    }
}
