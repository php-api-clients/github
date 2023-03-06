<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodespaceExportDetails
{
    public const SCHEMA_JSON = '{"title":"Fetches information about an export of a codespace.","type":"object","properties":{"state":{"type":["string","null"],"description":"State of the latest export","examples":["succeeded | failed | in_progress"]},"completed_at":{"type":["string","null"],"description":"Completion time of the last export operation","format":"date-time","examples":["2021-01-01T19:01:12Z"]},"branch":{"type":["string","null"],"description":"Name of the exported branch","examples":["codespace-monalisa-octocat-hello-world-g4wpq6h95q"]},"sha":{"type":["string","null"],"description":"Git commit SHA of the exported branch","examples":["fd95a81ca01e48ede9f39c799ecbcef817b8a3b2"]},"id":{"type":"string","description":"Id for the export details","examples":["latest"]},"export_url":{"type":"string","description":"Url for fetching export details","examples":["https:\\/\\/api.github.com\\/user\\/codespaces\\/:name\\/exports\\/latest"]},"html_url":{"type":["string","null"],"description":"Web url for the exported branch","examples":["https:\\/\\/github.com\\/octocat\\/hello-world\\/tree\\/:branch"]}},"description":"An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest"}';
    public const SCHEMA_TITLE = 'Fetches information about an export of a codespace.';
    public const SCHEMA_DESCRIPTION = 'An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"succeeded | failed | in_progress","completed_at":"2021-01-01T19:01:12Z","branch":"codespace-monalisa-octocat-hello-world-g4wpq6h95q","sha":"fd95a81ca01e48ede9f39c799ecbcef817b8a3b2","id":"latest","export_url":"https:\\/\\/api.github.com\\/user\\/codespaces\\/:name\\/exports\\/latest","html_url":"https:\\/\\/github.com\\/octocat\\/hello-world\\/tree\\/:branch"}';
    /**
     * state: State of the latest export
     * completed_at: Completion time of the last export operation
     * branch: Name of the exported branch
     * sha: Git commit SHA of the exported branch
     * id: Id for the export details
     * export_url: Url for fetching export details
     * html_url: Web url for the exported branch
     */
    public function __construct(public ?string $state, public ?string $completed_at, public ?string $branch, public ?string $sha, public ?string $id, public ?string $export_url, public ?string $html_url)
    {
    }
}
