<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateCard\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]}}}';
    public const SCHEMA_EXAMPLE = '{"note":"Update all gems","archived":false}';
    public const SCHEMA_TITLE = 'UpdateCard\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    public readonly ?string $note;
    /**
     * Whether or not the card is archived
     */
    public readonly bool $archived;
    public function __construct(string $note, bool $archived)
    {
        $this->note = $note;
        $this->archived = $archived;
    }
}
