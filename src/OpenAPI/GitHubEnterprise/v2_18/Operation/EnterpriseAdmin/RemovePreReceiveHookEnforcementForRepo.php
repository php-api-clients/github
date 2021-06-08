<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemovePreReceiveHookEnforcementForRepo
{
    private const OPERATION_ID = 'enterprise-admin/remove-pre-receive-hook-enforcement-for-repo';
    public string $owner;
    public string $repo;
    public int $pre_receive_hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $pre_receive_hook_id)
    {
        $this->owner               = $owner;
        $this->repo                = $repo;
        $this->pre_receive_hook_id = $pre_receive_hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{pre_receive_hook_id}'], [$this->owner, $this->repo, $this->pre_receive_hook_id], '/repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}?'));
    }

    function validateResponse(): void
    {
    }
}
