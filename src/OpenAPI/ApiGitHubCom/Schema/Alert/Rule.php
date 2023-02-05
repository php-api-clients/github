<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert;

final class Rule
{
    public const SCHEMA_JSON = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."}}}';
    public const SCHEMA_TITLE = 'Alert\\Rule';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A short description of the rule used to detect the alert.
     */
    public readonly string $description;
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public readonly string $id;
    /**
     * The severity of the alert.
     */
    public readonly ?string $severity;
    public function __construct(string $description, string $id, string $severity)
    {
        $this->description = $description;
        $this->id = $id;
        $this->severity = $severity;
    }
}
