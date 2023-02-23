<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class StatusCheckPolicy
{
    public const SCHEMA_JSON = '{"title":"Status Check Policy","required":["url","contexts_url","strict","contexts","checks"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"]},"strict":{"type":"boolean","examples":[true]},"contexts":{"type":"array","items":{"type":"string"},"examples":["continuous-integration\\/travis-ci"]},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"]}},"description":"Status Check Policy"}';
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    public ?string $url;
    public ?bool $strict;
    public ?array $contexts;
    public ?array $checks;
    public ?string $contexts_url;
    public function __construct(string $url, bool $strict, array $contexts, array $checks, string $contexts_url)
    {
        $this->url = $url;
        $this->strict = $strict;
        $this->contexts = $contexts;
        $this->checks = $checks;
        $this->contexts_url = $contexts_url;
    }
}
