<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"security_severity_level":{"enum":["low","medium","high","critical",null],"type":["string","null"],"description":"The security severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public readonly ?string $id;
    /**
     * The name of the rule used to detect the alert.
     */
    public readonly string $name;
    /**
     * The severity of the alert.
     */
    public readonly ?string $severity;
    /**
     * The security severity of the alert.
     */
    public readonly ?string $security_severity_level;
    /**
     * A short description of the rule used to detect the alert.
     */
    public readonly string $description;
    /**
     * description of the rule used to detect the alert.
     */
    public readonly string $full_description;
    /**
     * A set of tags applicable for the rule.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRule\Tags>
     */
    public readonly array $tags;
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    public readonly ?string $help;
    /**
     * A link to the documentation for the rule used to detect the alert.
     */
    public readonly ?string $help_uri;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRule\Tags> $tags
     */
    public function __construct(string $id, string $name, string $severity, string $security_severity_level, string $description, string $full_description, array $tags, string $help, string $help_uri)
    {
        $this->id = $id;
        $this->name = $name;
        $this->severity = $severity;
        $this->security_severity_level = $security_severity_level;
        $this->description = $description;
        $this->full_description = $full_description;
        $this->tags = $tags;
        $this->help = $help;
        $this->help_uri = $help_uri;
    }
}
