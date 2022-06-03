<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

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
    private string $name;
    /**
     * The severity of the alert.
     */
    private ?string $severity = null;
    /**
     * A short description of the rule used to detect the alert.
     */
    private string $description;
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public function id() : ?string
    {
        return $this->id;
    }
    /**
     * The name of the rule used to detect the alert.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The severity of the alert.
     */
    public function severity() : ?string
    {
        return $this->severity;
    }
    /**
     * A short description of the rule used to detect the alert.
     */
    public function description() : string
    {
        return $this->description;
    }
}
