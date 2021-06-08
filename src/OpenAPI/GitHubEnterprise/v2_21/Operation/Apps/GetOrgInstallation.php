<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOrgInstallation
{
    private const OPERATION_ID = 'apps/get-org-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public string $org;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $org)
    {
        $this->accept = $accept;
        $this->org    = $org;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}'], [$this->org], '/orgs/{org}/installation?'));
    }

    function validateResponse(): void
    {
    }
}
