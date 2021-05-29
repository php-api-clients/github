<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemovePreReceiveHookEnforcementForOrg
{
    private const OPERATION_ID = 'enterprise-admin/remove-pre-receive-hook-enforcement-for-org';
    public string $org;
    public int $pre_receive_hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $pre_receive_hook_id)
    {
        $this->org                 = $org;
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{pre_receive_hook_id}'], [$this->org, $this->pre_receive_hook_id], '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}?'));
    }

    function validateResponse(): void
    {
    }
}
