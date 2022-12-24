<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CE474C1Ecb3A5Add3C80A5B67F23E946B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"client_id":{"maxLength":20,"type":"string","description":"The OAuth app client key for which to create the token."},"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = 'c_e474c1ecb3a5add3c80a5b67f23e946b';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of scopes that this authorization is in.
     */
    private $scopes;
    /**
     * A note to remind you what the OAuth token is for.
     */
    private string $note;
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    private string $note_url;
    /**
     * The OAuth app client key for which to create the token.
     */
    private string $client_id;
    /**
     * The OAuth app client secret for which to create the token.
     */
    private string $client_secret;
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    private string $fingerprint;
    /**
     * A list of scopes that this authorization is in.
     */
    public function scopes()
    {
        return $this->scopes;
    }
    /**
     * A note to remind you what the OAuth token is for.
     */
    public function note() : string
    {
        return $this->note;
    }
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    public function note_url() : string
    {
        return $this->note_url;
    }
    /**
     * The OAuth app client key for which to create the token.
     */
    public function client_id() : string
    {
        return $this->client_id;
    }
    /**
     * The OAuth app client secret for which to create the token.
     */
    public function client_secret() : string
    {
        return $this->client_secret;
    }
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function fingerprint() : string
    {
        return $this->fingerprint;
    }
}
