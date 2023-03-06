<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Commit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd","html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"}';
    public function __construct(public ?string $sha, public ?string $url, public string $html_url)
    {
    }
}
