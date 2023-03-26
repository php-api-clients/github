<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Thread;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Subject
{
    public const SCHEMA_JSON = '{"required":["title","url","latest_comment_url","type"],"type":"object","properties":{"title":{"type":"string"},"url":{"type":"string"},"latest_comment_url":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","url":"generated_url_null","latest_comment_url":"generated_latest_comment_url_null","type":"generated_type_null"}';
    public function __construct(public string $title, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('latest_comment_url')] public string $latestCommentUrl, public string $type)
    {
    }
}
