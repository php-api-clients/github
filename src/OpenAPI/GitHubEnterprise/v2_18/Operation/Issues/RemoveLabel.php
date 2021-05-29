<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveLabel
{
    private const OPERATION_ID = 'issues/remove-label';
    public string $owner;
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    public string $name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $issue_number, $name)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->issue_number = $issue_number;
        $this->name         = $name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{issue_number}', '{name}'], [$this->owner, $this->repo, $this->issue_number, $this->name], '/repos/{owner}/{repo}/issues/{issue_number}/labels/{name}?'));
    }

    function validateResponse(): void
    {
    }
}
