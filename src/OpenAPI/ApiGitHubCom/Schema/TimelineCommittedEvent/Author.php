<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent;

final class Author
{
    public const SCHEMA_JSON = '{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"}';
    public const SCHEMA_TITLE = 'TimelineCommittedEvent\\Author';
    public const SCHEMA_DESCRIPTION = 'Identifying information for the git-user';
    /**
     * Timestamp of the commit
     */
    public readonly string $date;
    /**
     * Git email address of the user
     */
    public readonly string $email;
    /**
     * Name of the git user
     */
    public readonly string $name;
    public function __construct(string $date, string $email, string $name)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
    }
}
