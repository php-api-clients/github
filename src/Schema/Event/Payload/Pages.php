<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Event\Payload;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"page_name":"generated_page_name_null","title":"generated_title_null","summary":"generated_summary_null","action":"generated_action_null","sha":"generated_sha_null","html_url":"generated_html_url_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('page_name')] public ?string $pageName, public ?string $title, public ?string $summary, public ?string $action, public ?string $sha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
