<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePreReceiveHook
{
    private const OPERATION_ID = 'enterprise-admin/delete-pre-receive-hook';
    public int $pre_receive_hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($pre_receive_hook_id)
    {
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{pre_receive_hook_id}'], [$this->pre_receive_hook_id], '/admin/pre-receive-hooks/{pre_receive_hook_id}?'));
    }

    function validateResponse(): void
    {
    }
}
