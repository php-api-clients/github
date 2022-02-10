<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
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
     * The security severity of the alert.
     */
    private ?string $security_severity_level = null;
    /**
     * A short description of the rule used to detect the alert.
     */
    private string $description;
    /**
     * description of the rule used to detect the alert.
     */
    private string $full_description;
    /**
     * A set of tags applicable for the rule.
     */
    private array $tags = array();
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private ?string $help = null;
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
     * The security severity of the alert.
     */
    public function security_severity_level() : ?string
    {
        return $this->security_severity_level;
    }
    /**
     * A short description of the rule used to detect the alert.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * description of the rule used to detect the alert.
     */
    public function full_description() : string
    {
        return $this->full_description;
    }
    /**
     * A set of tags applicable for the rule.
     */
    public function tags() : array
    {
        return $this->tags;
    }
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public function help() : ?string
    {
        return $this->help;
    }
}
