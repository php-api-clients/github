<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CommunityHealthFile
{
    public const SCHEMA_JSON = '{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Community Health File';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl)
    {
    }
}
