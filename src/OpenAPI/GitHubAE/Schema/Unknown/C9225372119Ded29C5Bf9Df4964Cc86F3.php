<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9225372119Ded29C5Bf9Df4964Cc86F3
{
    public const SCHEMA_JSON = '{"required":["login","admin"],"type":"object","properties":{"login":{"type":"string","description":"The organization\'s username."},"admin":{"type":"string","description":"The login of the user who will manage this organization."},"profile_name":{"type":"string","description":"The organization\'s display name."}}}';
    public const SCHEMA_TITLE = 'c_9225372119ded29c5bf9df4964cc86f3';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The organization's username.
     */
    private string $login;
    /**
     * The login of the user who will manage this organization.
     */
    private string $admin;
    /**
     * The organization's display name.
     */
    private ?string $profile_name = null;
    /**
     * The organization's username.
     */
    public function login() : string
    {
        return $this->login;
    }
    /**
     * The login of the user who will manage this organization.
     */
    public function admin() : string
    {
        return $this->admin;
    }
    /**
     * The organization's display name.
     */
    public function profile_name() : ?string
    {
        return $this->profile_name;
    }
}
