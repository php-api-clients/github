<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_TITLE       = 'code-scanning-alert-rule';
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
    private array $tags = [];
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private string $help;

    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * The name of the rule used to detect the alert.
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * The severity of the alert.
     */
    public function severity(): string
    {
        return $this->severity;
    }

    /**
     * A short description of the rule used to detect the alert.
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * description of the rule used to detect the alert.
     */
    public function full_description(): string
    {
        return $this->full_description;
    }

    /**
     * A set of tags applicable for the rule.
     */
    public function tags(): array
    {
        return $this->tags;
    }

    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public function help(): string
    {
        return $this->help;
    }
}
