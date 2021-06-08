<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOrgSecret
{
    private const OPERATION_ID = 'actions/get-org-secret';
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $secret_name)
    {
        $this->org         = $org;
        $this->secret_name = $secret_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{secret_name}'], [$this->org, $this->secret_name], '/orgs/{org}/actions/secrets/{secret_name}?'));
    }

    function validateResponse(): void
    {
    }
}
