<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Projects\MoveCard\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:top|bottom|after:\\\\d+)$","type":"string","description":"The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.","examples":["bottom"]},"column_id":{"type":"integer","description":"The unique identifier of the column the card should be moved to","examples":[42]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"position":"bottom","column_id":42}';

    /**
     * position: The position of the card in a column. Can be one of: `top`, `bottom`, or `after:<card_id>` to place after the specified card.
     * columnId: The unique identifier of the column the card should be moved to
     */
    public function __construct(public string $position, #[MapFrom('column_id')] public ?int $columnId)
    {
    }
}
