<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CBf144709Bed057Ace8541Ffd97101Ce9
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enforcement":{"type":"string","description":"The state of enforcement for the hook on this repository."},"allow_downstream_configuration":{"type":"boolean","description":"Whether repositories can override enforcement."}}}';
    public const SCHEMA_TITLE = 'c_bf144709bed057ace8541ffd97101ce9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of enforcement for the hook on this repository.
     */
    private string $enforcement;
    /**
     * Whether repositories can override enforcement.
     */
    private bool $allow_downstream_configuration;
    /**
     * The state of enforcement for the hook on this repository.
     */
    public function enforcement() : string
    {
        return $this->enforcement;
    }
    /**
     * Whether repositories can override enforcement.
     */
    public function allow_downstream_configuration() : bool
    {
        return $this->allow_downstream_configuration;
    }
}
