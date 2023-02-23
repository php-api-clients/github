<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert;

final readonly class Tool
{
    public const SCHEMA_JSON = '{"required":["name","version"],"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis alert.
     */
    public ?string $name;
    /**
     * The version of the tool used to detect the alert.
     */
    public ?string $version;
    public function __construct(string $name, string $version)
    {
        $this->name = $name;
        $this->version = $version;
    }
}
