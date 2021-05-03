<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertRuleSummary
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule-summary';
    public const SPL_HASH = '000000000c1ce0030000000065732ccc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    private string $id;
    /**
     * The name of the rule used to detect the alert.
     */
    private string $name;
    /**
     * The severity of the alert.
     */
    private string $severity;
    /**
     * A short description of the rule used to detect the alert.
     */
    private string $description;
    public function id() : string
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function severity() : string
    {
        return $this->severity;
    }
    public function description() : string
    {
        return $this->description;
    }
}
