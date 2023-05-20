<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetExportDetailsForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-export-details-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/exports/{export_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/{codespace_name}/exports/{export_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CodespaceExportDetails>
     **/
    public function call(string $codespaceName, string $exportId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\GetExportDetailsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $codespaceName, $exportId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespaceExportDetails {
            return $operation->createResponse($response);
        });
    }
}
