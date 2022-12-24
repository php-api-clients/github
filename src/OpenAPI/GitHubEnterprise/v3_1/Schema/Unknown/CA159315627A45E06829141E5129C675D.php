<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA159315627A45E06829141E5129C675D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":["array","null"],"items":{"type":"string"},"description":"A list of scopes that this authorization is in.","examples":["public_repo","user"]},"add_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to add to this authorization."},"remove_scopes":{"type":"array","items":{"type":"string"},"description":"A list of scopes to remove from this authorization."},"note":{"type":"string","description":"A note to remind you what the OAuth token is for.","examples":["Update all gems"]},"note_url":{"type":"string","description":"A URL to remind you what app the OAuth token is for."},"fingerprint":{"type":"string","description":"A unique string to distinguish an authorization from others created for the same client ID and user."}}}';
    public const SCHEMA_TITLE = 'c_a159315627a45e06829141e5129c675d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of scopes that this authorization is in.
     */
    private $scopes;
    /**
     * A list of scopes to add to this authorization.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $add_scopes = array();
    /**
     * A list of scopes to remove from this authorization.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $remove_scopes = array();
    /**
     * A note to remind you what the OAuth token is for.
     */
    private string $note;
    /**
     * A URL to remind you what app the OAuth token is for.
     */
    private string $note_url;
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
     * A list of scopes to add to this authorization.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function add_scopes() : array
    {
        return $this->add_scopes;
    }
    /**
     * A list of scopes to remove from this authorization.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function remove_scopes() : array
    {
        return $this->remove_scopes;
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
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     */
    public function fingerprint() : string
    {
        return $this->fingerprint;
    }
}
