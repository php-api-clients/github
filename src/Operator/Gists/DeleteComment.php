<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gists;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteComment
{
    public const OPERATION_ID    = 'gists/delete-comment';
    public const OPERATION_MATCH = 'DELETE /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $gistId, int $commentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gists\DeleteComment($this->responseSchemaValidator, $this->hydrator, $gistId, $commentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
