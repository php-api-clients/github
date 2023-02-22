<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final readonly class Stats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $additions;
    public ?int $deletions;
    public ?int $total;
    public function __construct(int $additions, int $deletions, int $total)
    {
        $this->additions = $additions;
        $this->deletions = $deletions;
        $this->total = $total;
    }
}
