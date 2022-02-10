<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ExternalGroup;

final class Members
{
    public const SCHEMA_TITLE = 'external-group::members';
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
