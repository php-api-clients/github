<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
    public const SPL_HASH = '000000005dfdd4c90000000040885a06';
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
    /**
     * description of the rule used to detect the alert.
     */
    private ?string $full_description = null;
    /**
     * A set of tags applicable for the rule.
     */
    private array $tags = array();
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private ?string $help = null;
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
    public function full_description() : ?string
    {
        return $this->full_description;
    }
    public function tags() : array
    {
        return $this->tags;
    }
    public function help() : ?string
    {
        return $this->help;
    }
}
