<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit;

final class Committer
{
    public const SCHEMA_JSON = '{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"}';
    public const SCHEMA_TITLE = 'GitCommit\\Committer';
    public const SCHEMA_DESCRIPTION = 'Identifying information for the git-user';
    /**
     * Timestamp of the commit
     */
    private string $date;
    /**
     * Git email address of the user
     */
    private string $email;
    /**
     * Name of the git user
     */
    private string $name;
    /**
     * Timestamp of the commit
     */
    public function date() : string
    {
        return $this->date;
    }
    /**
     * Git email address of the user
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * Name of the git user
     */
    public function name() : string
    {
        return $this->name;
    }
}
