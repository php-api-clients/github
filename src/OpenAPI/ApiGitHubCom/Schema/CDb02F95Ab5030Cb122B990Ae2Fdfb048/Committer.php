<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CDb02F95Ab5030Cb122B990Ae2Fdfb048;

final class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."}';
    public const SCHEMA_TITLE = 'CDb02F95Ab5030Cb122B990Ae2Fdfb048\\Committer';
    public const SCHEMA_DESCRIPTION = 'object containing information about the committer.';
    /**
     * The name of the author (or committer) of the commit
     */
    private string $name;
    /**
     * The email of the author (or committer) of the commit
     */
    private string $email;
    /**
     * The name of the author (or committer) of the commit
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The email of the author (or committer) of the commit
     */
    public function email() : string
    {
        return $this->email;
    }
}
