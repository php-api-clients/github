<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C049A702D068D049Ed1D4C5206Ea62Cd4
{
    public const SCHEMA_JSON = '{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = 'c_049a702d068d049ed1d4c5206ea62cd4';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The response headers received when the delivery was made.
     */
    private $headers;
    /**
     * The response payload received.
     */
    private $payload;
    /**
     * The response headers received when the delivery was made.
     */
    public function headers()
    {
        return $this->headers;
    }
    /**
     * The response payload received.
     */
    public function payload()
    {
        return $this->payload;
    }
}
