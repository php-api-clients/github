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
    private int $number;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * The REST API URL for fetching the list of instances for an alert.
     */
    private string $instances_url;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private SimpleUser $dismissed_by = [];
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $dismissed_at;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    private string $dismissed_reason;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlertRuleSummary::class) */
    private CodeScanningAlertRuleSummary $rule = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisTool::class) */
    private CodeScanningAnalysisTool $tool = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlertInstance::class) */
    private CodeScanningAlertInstance $most_recent_instance = [];

    /**
     * The security alert number.
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at(): string
    {
        return $this->created_at;
    }

    /**
     * The REST API URL of the alert resource.
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url(): string
    {
        return $this->html_url;
    }

    /**
     * The REST API URL for fetching the list of instances for an alert.
     */
    public function instances_url(): string
    {
        return $this->instances_url;
    }

    /**
     * State of a code scanning alert.
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * Simple User
     */
    public function dismissed_by(): SimpleUser
    {
        return $this->dismissed_by;
    }

    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function dismissed_at(): string
    {
        return $this->dismissed_at;
    }

    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    public function dismissed_reason(): string
    {
        return $this->dismissed_reason;
    }

    public function rule(): CodeScanningAlertRuleSummary
    {
        return $this->rule;
    }

    public function tool(): CodeScanningAnalysisTool
    {
        return $this->tool;
    }

    public function most_recent_instance(): CodeScanningAlertInstance
    {
        return $this->most_recent_instance;
    }
}
