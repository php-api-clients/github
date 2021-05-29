<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetDownloadStatusForPreReceiveEnvironment
{
    private const OPERATION_ID = 'enterprise-admin/get-download-status-for-pre-receive-environment';
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
        return new Request('get', str_replace(['{pre_receive_environment_id}'], [$this->pre_receive_environment_id], '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest?'));
    }

    function validateResponse(): void
    {
    }
}
