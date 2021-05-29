<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePreReceiveEnvironment
{
    private const OPERATION_ID = 'enterprise-admin/delete-pre-receive-environment';
    public int $pre_receive_environment_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($pre_receive_environment_id)
    {
        $this->pre_receive_environment_id = $pre_receive_environment_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{pre_receive_environment_id}'], [$this->pre_receive_environment_id], '/admin/pre-receive-environments/{pre_receive_environment_id}?'));
    }

    function validateResponse(): void
    {
    }
}