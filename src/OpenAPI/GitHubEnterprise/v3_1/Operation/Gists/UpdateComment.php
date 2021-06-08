<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateComment
{
    private const OPERATION_ID = 'gists/update-comment';
    /**gist_id parameter**/
    public string $gist_id;
    /**comment_id parameter**/
    public int $comment_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($gist_id, $comment_id)
    {
        $this->gist_id    = $gist_id;
        $this->comment_id = $comment_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{gist_id}', '{comment_id}'], [$this->gist_id, $this->comment_id], '/gists/{gist_id}/comments/{comment_id}?'));
    }

    function validateResponse(): void
    {
    }
}
