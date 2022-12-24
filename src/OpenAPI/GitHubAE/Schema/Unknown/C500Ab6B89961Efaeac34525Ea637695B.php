<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C500Ab6B89961Efaeac34525Ea637695B
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The name of the branch which should be updated to match upstream."}}}';
    public const SCHEMA_TITLE = 'c_500ab6b89961efaeac34525ea637695b';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the branch which should be updated to match upstream.
     */
    private string $branch;
    /**
     * The name of the branch which should be updated to match upstream.
     */
    public function branch() : string
    {
        return $this->branch;
    }
}
