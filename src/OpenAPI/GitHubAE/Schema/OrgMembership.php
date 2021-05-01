<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class OrgMembership
{
    public const SCHEMA_TITLE = 'Org Membership';
    public const SCHEMA_DESCRIPTION = 'Org Membership';
    private string $url;
    /**The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.**/
    private string $state;
    /**The user's membership type in the organization.**/
    private string $role;
    private string $organization_url;
    /**Organization Simple**/
    private object $organization;
    private $user;
    private object $permissions;
    public function url() : string
    {
        return $this->url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function organization_url() : string
    {
        return $this->organization_url;
    }
    public function organization() : object
    {
        return $this->organization;
    }
    public function user()
    {
        return $this->user;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
}
