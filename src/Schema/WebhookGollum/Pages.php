<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookGollum;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Pages
{
    public const SCHEMA_JSON = '{"required":["page_name","title","summary","action","sha","html_url"],"type":"object","properties":{"action":{"enum":["created","edited"],"type":"string","description":"The action that was performed on the page. Can be `created` or `edited`."},"html_url":{"type":"string","description":"Points to the HTML wiki page.","format":"uri"},"page_name":{"type":"string","description":"The name of the page."},"sha":{"type":"string","description":"The latest commit SHA of the page."},"summary":{"type":["string","null"]},"title":{"type":"string","description":"The current page title."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"created","html_url":"https:\\/\\/example.com\\/","page_name":"generated_page_name_null","sha":"generated_sha_null","summary":"generated_summary_null","title":"generated_title_null"}';
    /**
     * action: The action that was performed on the page. Can be `created` or `edited`.
     * htmlUrl: Points to the HTML wiki page.
     * pageName: The name of the page.
     * sha: The latest commit SHA of the page.
     * title: The current page title.
     */
    public function __construct(public string $action, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('page_name')] public string $pageName, public string $sha, public ?string $summary, public string $title)
    {
    }
}
