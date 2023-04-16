<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Event\Payload;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Pages
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"page_name":{"type":"string"},"title":{"type":"string"},"summary":{"type":["string","null"]},"action":{"type":"string"},"sha":{"type":"string"},"html_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"page_name":"generated_page_name_null","title":"generated_title_null","summary":"generated_summary_null","action":"generated_action_null","sha":"generated_sha_null","html_url":"generated_html_url_null"}';

    public function __construct(#[MapFrom('page_name')] public ?string $pageName, public ?string $title, public ?string $summary, public ?string $action, public ?string $sha, #[MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
