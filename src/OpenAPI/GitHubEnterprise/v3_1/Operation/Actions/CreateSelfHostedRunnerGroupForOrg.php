<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateSelfHostedRunnerGroupForOrg
{
    private const OPERATION_ID = 'actions/create-self-hosted-runner-group-for-org';
    public string $org;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org)
    {
        $this->org = $org;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{org}'], [$this->org], '/orgs/{org}/actions/runner-groups?'));
    }

    function validateResponse(): void
    {
    }
}
