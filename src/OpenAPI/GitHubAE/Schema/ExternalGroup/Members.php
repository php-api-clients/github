<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup;

final class Members
{
    public const SCHEMA_JSON = '{"required":["member_id","member_login","member_name","member_email"],"type":"object","properties":{"member_id":{"type":"integer","description":"The internal user ID of the identity","examples":[1]},"member_login":{"type":"string","description":"The handle\\/login for the user","examples":["mona-lisa_eocsaxrs"]},"member_name":{"type":"string","description":"The user display name\\/profile name","examples":["Mona Lisa"]},"member_email":{"type":"string","description":"An email attached to a user","examples":["mona_lisa@github.com"]}}}';
    public const SCHEMA_TITLE = 'ExternalGroup\\Members';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The internal user ID of the identity
     */
    private int $member_id;
    /**
     * The handle/login for the user
     */
    private string $member_login;
    /**
     * The user display name/profile name
     */
    private string $member_name;
    /**
     * An email attached to a user
     */
    private string $member_email;
    /**
     * The internal user ID of the identity
     */
    public function member_id() : int
    {
        return $this->member_id;
    }
    /**
     * The handle/login for the user
     */
    public function member_login() : string
    {
        return $this->member_login;
    }
    /**
     * The user display name/profile name
     */
    public function member_name() : string
    {
        return $this->member_name;
    }
    /**
     * An email attached to a user
     */
    public function member_email() : string
    {
        return $this->member_email;
    }
}
