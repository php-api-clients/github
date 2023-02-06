<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_JSON = '{"title":"Status Check Policy","required":["url","contexts_url","strict","contexts","checks"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"]},"strict":{"type":"boolean","examples":[true]},"contexts":{"type":"array","items":{"type":"string"},"examples":["continuous-integration\\/travis-ci"]},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"]}},"description":"Status Check Policy"}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks","strict":true,"contexts":"continuous-integration\\/travis-ci","checks":[{"context":"continuous-integration\\/travis-ci"}],"contexts_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"}';
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    public readonly string $url;
    public readonly bool $strict;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Contexts>
     */
    public readonly array $contexts;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Checks>
     */
    public readonly array $checks;
    public readonly string $contexts_url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Contexts> $contexts
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Checks> $checks
     */
    public function __construct(string $url, bool $strict, array $contexts, array $checks, string $contexts_url)
    {
        $this->url = $url;
        $this->strict = $strict;
        $this->contexts = $contexts;
        $this->checks = $checks;
        $this->contexts_url = $contexts_url;
    }
}
