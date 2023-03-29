<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionCommentDeleted\Comment;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Reactions
{
    public const SCHEMA_JSON = '{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Reactions';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"_PLUSES_1":13,"_MINUS_1":13,"confused":13,"eyes":13,"heart":13,"hooray":13,"laugh":13,"rocket":13,"total_count":13,"url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('_PLUSES_1')] public int $pluses1, #[\EventSauce\ObjectHydrator\MapFrom('_MINUS_1')] public int $minus1, public int $confused, public int $eyes, public int $heart, public int $hooray, public int $laugh, public int $rocket, #[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, public string $url)
    {
    }
}
