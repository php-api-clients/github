<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

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
     * State of a code scanning alert.
     */
    private string $state;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser $dismissed_by = null;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $dismissed_at = null;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    private ?string $dismissed_reason = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAlertRule::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAlertRule $rule;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAnalysisTool::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAnalysisTool $tool;
    private $instances;
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
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Simple User
     */
    public function dismissed_by() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser
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
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    public function rule() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAlertRule
    {
        return $this->rule;
    }
    public function tool() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAnalysisTool
    {
        return $this->tool;
    }
    public function instances()
    {
        return $this->instances;
    }
}
