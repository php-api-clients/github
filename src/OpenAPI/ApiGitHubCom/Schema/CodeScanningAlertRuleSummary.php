<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertRuleSummary
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'code-scanning-alert-rule-summary';
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
     * A set of tags applicable for the rule.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRuleSummary\Tags>
     */
    public readonly array $tags;
    /**
     * The severity of the alert.
     */
    public readonly ?string $severity;
    /**
     * A short description of the rule used to detect the alert.
     */
    public readonly string $description;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRuleSummary\Tags> $tags
     */
    public function __construct(string $id, string $name, array $tags, string $severity, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tags = $tags;
        $this->severity = $severity;
        $this->description = $description;
    }
}
