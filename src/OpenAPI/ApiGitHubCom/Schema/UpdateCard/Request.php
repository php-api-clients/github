<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateCard;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]}}}';
    public const SCHEMA_TITLE = 'UpdateCard\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    private ?string $note;
    /**
     * Whether or not the card is archived
     */
    private bool $archived;
    /**
     * The project card's note
     */
    public function note() : ?string
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
