<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\CodeScanning;

final class GetAnalysis
{
    public const OPERATION_ID = 'code-scanning/get-analysis';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the analysis, as returned from the `GET /repos/{owner}/{repo}/code-scanning/analyses` operation.**/
    private int $analysis_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb $hydrator, string $owner, string $repo, int $analysis_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->analysis_id = $analysis_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{analysis_id}'), array($this->owner, $this->repo, $this->analysis_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\Schema\Operation\CodeScanning\GetAnalysis\Response\ApplicationjsonPlusSarif\H200|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\CodeScanningAnalysis|\ApiClients\Client\Github\Schema\Operation\CodeScanning\GetAnalysis\Response\ApplicationjsonPlusSarif\H200|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Service unavailable**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\CodeScanningAnalysis::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\CodeScanningAnalysis', $body);
                    case 'application/json+sarif':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\CodeScanning\GetAnalysis\Response\ApplicationjsonPlusSarif\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', $body);
                }
                break;
            /**Service unavailable**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Service unavailable**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
