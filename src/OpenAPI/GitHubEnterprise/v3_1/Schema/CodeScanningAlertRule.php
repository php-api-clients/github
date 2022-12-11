<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
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
     * The severity of the alert.
     */
    private $severity;
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
    private $tags;
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private $help;
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
    public function tags()
    {
        return $this->tags;
    }
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public function help()
    {
        return $this->help;
    }
}
