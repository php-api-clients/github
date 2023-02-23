<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookCodeScanningAlertClosedByUser\Alert;

final readonly class Rule
{
    public const SCHEMA_JSON = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A short description of the rule used to detect the alert.
     */
    public ?string $description;
    public string $full_description;
    public ?string $help;
    /**
     * A link to the documentation for the rule used to detect the alert.
     */
    public ?string $help_uri;
    /**
     * A unique identifier for the rule used to detect the alert.
     */
    public ?string $id;
    public string $name;
    /**
     * The severity of the alert.
     */
    public ?string $severity;
    public ?array $tags;
    public function __construct(string $description, string $full_description, string $help, string $help_uri, string $id, string $name, string $severity, array $tags)
    {
        $this->description = $description;
        $this->full_description = $full_description;
        $this->help = $help;
        $this->help_uri = $help_uri;
        $this->id = $id;
        $this->name = $name;
        $this->severity = $severity;
        $this->tags = $tags;
    }
}
