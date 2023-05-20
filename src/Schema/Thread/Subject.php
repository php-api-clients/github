<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Thread;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Subject
{
    public const SCHEMA_JSON         = '{"required":["title","url","latest_comment_url","type"],"type":"object","properties":{"title":{"type":"string"},"url":{"type":"string"},"latest_comment_url":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated","url":"generated","latest_comment_url":"generated","type":"generated"}';

    public function __construct(public string $title, public string $url, #[MapFrom('latest_comment_url')] public string $latestCommentUrl, public string $type)
    {
    }
}
