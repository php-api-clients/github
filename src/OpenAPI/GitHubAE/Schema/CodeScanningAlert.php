<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlert
{
    public const SCHEMA_TITLE = 'code-scanning-alert';
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
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableSimpleUser $dismissed_by = null;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $dismissed_at = null;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    private ?string $dismissed_reason = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertRule::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertRule $rule;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysisTool::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysisTool $tool;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertInstance::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertInstance $most_recent_instance;
    /**
     * The security alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
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
     * The REST API URL for fetching the list of instances for an alert.
     */
    public function instances_url() : string
    {
        return $this->instances_url;
    }
    /**
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Simple User
     */
    public function dismissed_by() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableSimpleUser
    {
        return $this->dismissed_by;
    }
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function dismissed_at() : ?string
    {
        return $this->dismissed_at;
    }
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    public function rule() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertRule
    {
        return $this->rule;
    }
    public function tool() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAnalysisTool
    {
        return $this->tool;
    }
    public function most_recent_instance() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertInstance
    {
        return $this->most_recent_instance;
    }
}
