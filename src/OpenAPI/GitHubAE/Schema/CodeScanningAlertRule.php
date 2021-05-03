<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
    public const SPL_HASH = '000000007ee6e8170000000021479ea3';
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
    /**
     * description of the rule used to detect the alert.
     */
    private string $full_description;
    /**
     * A set of tags applicable for the rule.
     */
    private array $tags;
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private string $help;
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
    public function full_description() : string
    {
        return $this->full_description;
    }
    public function tags() : array
    {
        return $this->tags;
    }
    public function help() : string
    {
        return $this->help;
    }
}
