<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gists;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateComment
{
    public const OPERATION_ID    = 'gists/update-comment';
    public const OPERATION_MATCH = 'PATCH /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<GistComment>
     **/
    public function call(string $gistId, int $commentId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gists\UpdateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $gistId, $commentId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistComment {
            return $operation->createResponse($response);
        });
    }
}
