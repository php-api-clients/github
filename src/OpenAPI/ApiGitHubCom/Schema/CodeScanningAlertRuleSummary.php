<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertRuleSummary
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule-summary';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    private $id;
    /**
     * The name of the rule used to detect the alert.
     */
    private string $name;
    /**
     * A set of tags applicable for the rule.
     */
    private $tags;
    /**
     * The severity of the alert.
     */
    private $severity;
    /**
     * A short description of the rule used to detect the alert.
     */
    private string $description;
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public function id()
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
     * A set of tags applicable for the rule.
     */
    public function tags()
    {
        return $this->tags;
    }
    /**
     * The severity of the alert.
     */
    public function severity()
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
