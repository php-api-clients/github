<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAlertRuleSummary
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule-summary';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    private ?string $id = null;
    /**
     * The name of the rule used to detect the alert.
     */
    private ?string $name = null;
    /**
     * The severity of the alert.
     */
    private ?string $severity = null;
    /**
     * A short description of the rule used to detect the alert.
     */
    private ?string $description = null;
    public function id() : ?string
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function severity() : ?string
    {
        return $this->severity;
    }
    public function description() : ?string
    {
        return $this->description;
    }
}
