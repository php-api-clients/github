<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectColumn
{
    public const SCHEMA_JSON         = '{"title":"Project Column","required":["id","node_id","url","project_url","cards_url","name","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]},"cards_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards"]},"id":{"type":"integer","description":"The unique identifier of the project column","examples":[42]},"node_id":{"type":"string","examples":["MDEzOlByb2plY3RDb2x1bW4zNjc="]},"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:18:44Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:22:28Z"]}},"description":"Project columns contain cards of work."}';
    public const SCHEMA_TITLE        = 'Project Column';
    public const SCHEMA_DESCRIPTION  = 'Project columns contain cards of work.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/projects\\/columns\\/367","project_url":"https:\\/\\/api.github.com\\/projects\\/120","cards_url":"https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards","id":42,"node_id":"MDEzOlByb2plY3RDb2x1bW4zNjc=","name":"Remaining tasks","created_at":"2016-09-05T14:18:44Z","updated_at":"2016-09-05T14:22:28Z"}';

    /**
     * id: The unique identifier of the project column
     * name: Name of the project column
     */
    public function __construct(public string $url, #[MapFrom('project_url')]
    public string $projectUrl, #[MapFrom('cards_url')]
    public string $cardsUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
