<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecretScanningLocation
{
    public const SCHEMA_TITLE = 'secret-scanning-location';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The location type. Because secrets may be found in different types of resources (ie. code, comments, issues), this field identifies the type of resource where the secret was found.
     */
    private string $type;
    private $details;
    /**
     * The location type. Because secrets may be found in different types of resources (ie. code, comments, issues), this field identifies the type of resource where the secret was found.
     */
    public function type() : string
    {
        return $this->type;
    }
    public function details()
    {
        return $this->details;
    }
}
