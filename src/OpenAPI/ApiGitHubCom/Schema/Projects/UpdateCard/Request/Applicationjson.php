<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Projects\UpdateCard\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    public ?string $note;
    /**
     * Whether or not the card is archived
     */
    public ?bool $archived;

    public function __construct(string $note, bool $archived)
    {
        $this->note     = $note;
        $this->archived = $archived;
    }
}
