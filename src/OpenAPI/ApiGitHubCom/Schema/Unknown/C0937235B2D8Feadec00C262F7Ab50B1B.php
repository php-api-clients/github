<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C0937235B2D8Feadec00C262F7Ab50B1B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]}}}';
    public const SCHEMA_TITLE = 'c_0937235b2d8feadec00c262f7ab50b1b';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    private $note;
    /**
     * Whether or not the card is archived
     */
    private bool $archived;
    /**
     * The project card's note
     */
    public function note()
    {
        return $this->note;
    }
    /**
     * Whether or not the card is archived
     */
    public function archived() : bool
    {
        return $this->archived;
    }
}
