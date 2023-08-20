<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietD9DFA38E\TietD9136D28\TietD1296A44;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA1883F7A
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "topic_relation": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "topic_id": {
                    "type": "integer"
                },
                "relation_type": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "topic_relation": {
        "id": 2,
        "name": "generated",
        "topic_id": 8,
        "relation_type": "generated"
    }
}';

    public function __construct(#[MapFrom('topic_relation')]
    public Schema\TopicSearchResultItem\Related\TopicRelation|null $topicRelation,)
    {
    }
}
