<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CFa1Eefb37434Eb8A715322C9C5Ba1Cfc
{
    public const SCHEMA_JSON = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:top|bottom|after:\\\\d+)$","type":"string","description":"The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.","examples":["bottom"]},"column_id":{"type":"integer","description":"The unique identifier of the column the card should be moved to","examples":[42]}}}';
    public const SCHEMA_TITLE = 'c_fa1eefb37434eb8a715322c9c5ba1cfc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.
     */
    private string $position;
    /**
     * The unique identifier of the column the card should be moved to
     */
    private ?int $column_id = null;
    /**
     * The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.
     */
    public function position() : string
    {
        return $this->position;
    }
    /**
     * The unique identifier of the column the card should be moved to
     */
    public function column_id() : ?int
    {
        return $this->column_id;
    }
}
