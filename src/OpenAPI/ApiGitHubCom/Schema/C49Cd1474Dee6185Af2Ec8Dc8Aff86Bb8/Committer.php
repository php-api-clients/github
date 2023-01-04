<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C49Cd1474Dee6185Af2Ec8Dc8Aff86Bb8;

final class Committer
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."}';
    public const SCHEMA_TITLE = 'C49Cd1474Dee6185Af2Ec8Dc8Aff86Bb8\\Committer';
    public const SCHEMA_DESCRIPTION = 'The person that committed the file. Default: the authenticated user.';
    /**
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     */
    private string $name;
    /**
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    private string $email;
    private ?string $date = null;
    /**
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    public function email() : string
    {
        return $this->email;
    }
    public function date() : ?string
    {
        return $this->date;
    }
}
