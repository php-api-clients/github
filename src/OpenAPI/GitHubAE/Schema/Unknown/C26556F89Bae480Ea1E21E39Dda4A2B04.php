<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C26556F89Bae480Ea1E21E39Dda4A2B04
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository."},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."}}}';
    public const SCHEMA_TITLE = 'c_26556f89bae480ea1e21e39dda4a2b04';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Determines if notifications should be received from this repository.
     */
    private bool $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    private bool $ignored;
    /**
     * Determines if notifications should be received from this repository.
     */
    public function subscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    public function ignored() : bool
    {
        return $this->ignored;
    }
}
