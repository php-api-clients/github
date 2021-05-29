<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAlertItems
{
    public const SCHEMA_TITLE       = 'code-scanning-alert-items';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The security alert number.
     */
    private ?int $number = null;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $created_at = null;
    /**
     * The REST API URL of the alert resource.
     */
    private ?string $url = null;
    /**
     * The GitHub URL of the alert resource.
     */
    private ?string $html_url = null;
    /**
     * The REST API URL for fetching the list of instances for an alert.
     */
    private ?string $instances_url = null;
    /**
     * State of a code scanning alert.
     */
    private ?string $state = null;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private ?SimpleUser $dismissed_by = null;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $dismissed_at = null;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    private ?string $dismissed_reason = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlertRuleSummary::class) */
    private ?CodeScanningAlertRuleSummary $rule = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisTool::class) */
    private ?CodeScanningAnalysisTool $tool = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlertInstance::class) */
    private ?CodeScanningAlertInstance $most_recent_instance = null;

    public function number(): ?int
    {
        return $this->number;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function instances_url(): ?string
    {
        return $this->instances_url;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function dismissed_by(): ?SimpleUser
    {
        return $this->dismissed_by;
    }

    public function dismissed_at(): ?string
    {
        return $this->dismissed_at;
    }

    public function dismissed_reason(): ?string
    {
        return $this->dismissed_reason;
    }

    public function rule(): ?CodeScanningAlertRuleSummary
    {
        return $this->rule;
    }

    public function tool(): ?CodeScanningAnalysisTool
    {
        return $this->tool;
    }

    public function most_recent_instance(): ?CodeScanningAlertInstance
    {
        return $this->most_recent_instance;
    }
}
