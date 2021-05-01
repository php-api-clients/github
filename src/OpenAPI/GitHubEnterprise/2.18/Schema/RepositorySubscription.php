<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Schema;

final class RepositorySubscription
{
    public const SCHEMA_TITLE = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION = 'Repository invitations let you manage who you collaborate with.';
    /**Determines if notifications should be received from this repository.**/
    private boolean $subscribed;
    /**Determines if all notifications should be blocked from this repository.**/
    private boolean $ignored;
    private string $reason;
    private string $created_at;
    private string $url;
    private string $repository_url;
    public function subscribed() : boolean
    {
        return $this->subscribed;
    }
    public function ignored() : boolean
    {
        return $this->ignored;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
}
