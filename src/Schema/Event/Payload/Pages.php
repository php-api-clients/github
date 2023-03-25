<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Event\Payload;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pageName":"generated_page_name_null","title":"generated_title_null","summary":"generated_summary_null","action":"generated_action_null","sha":"generated_sha_null","htmlUrl":"generated_html_url_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('page_name')] public ?string $pageName, public ?string $title, public ?string $summary, public ?string $action, public ?string $sha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
