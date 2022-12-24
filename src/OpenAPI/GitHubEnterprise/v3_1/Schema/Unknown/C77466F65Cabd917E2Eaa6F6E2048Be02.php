<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C77466F65Cabd917E2Eaa6F6E2048Be02
{
    public const SCHEMA_JSON = '{"required":["client_secret"],"type":"object","properties":{"client_secret":{"maxLength":40,"type":"string","description":"The OAuth app client secret for which to create the token."},"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = 'c_77466f65cabd917e2eaa6f6e2048be02';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The OAuth app client secret for which to create the token.
     */
    private string $client_secret;
    /**
     * A list of scopes that this authorization is in.
     */
    private $scopes;
    /**
     * A note to remind you what the OAuth token is for.
     */
    private ?string $note = null;
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    private ?string $note_url = null;
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    private ?string $fingerprint = null;
    /**
     * The OAuth app client secret for which to create the token.
     */
    public function client_secret() : string
    {
        return $this->client_secret;
    }
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
    public function note() : ?string
    {
        return $this->note;
    }
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    public function note_url() : ?string
    {
        return $this->note_url;
    }
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function fingerprint() : ?string
    {
        return $this->fingerprint;
    }
}
