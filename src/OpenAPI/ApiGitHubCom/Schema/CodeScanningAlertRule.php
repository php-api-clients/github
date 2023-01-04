<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertRule
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"security_severity_level":{"enum":["low","medium","high","critical",null],"type":["string","null"],"description":"The security severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string","description":"description of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"help":{"type":["string","null"],"description":"Detailed documentation for the rule as GitHub Flavored Markdown."},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."}}}';
    public const SCHEMA_TITLE = 'code-scanning-alert-rule';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    private ?string $id;
    /**
     * The name of the rule used to detect the alert.
     */
    private string $name;
    /**
     * The severity of the alert.
     */
    private ?string $severity;
    /**
     * The security severity of the alert.
     */
    private ?string $security_severity_level;
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
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRule\Tags>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRule\Tags::class)
     */
    private array $tags = array();
    /**
     * Detailed documentation for the rule as GitHub Flavored Markdown.
     */
    private ?string $help;
    /**
     * A link to the documentation for the rule used to detect the alert.
     */
    private ?string $help_uri;
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRule\Tags>
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
    /**
     * A link to the documentation for the rule used to detect the alert.
     */
    public function help_uri() : ?string
    {
        return $this->help_uri;
    }
}
