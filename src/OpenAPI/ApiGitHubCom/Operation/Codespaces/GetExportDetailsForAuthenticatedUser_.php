<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class GetExportDetailsForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/get-export-details-for-authenticated-user';
    /**The name of the codespace.**/
    public string $codespace_name;
    /**The ID of the export operation, or `latest`. Currently only `latest` is currently supported.**/
    public string $export_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($codespace_name, $export_id)
    {
        $this->codespace_name = $codespace_name;
        $this->export_id = $export_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{codespace_name}', '{export_id}'), array($this->codespace_name, $this->export_id), '/user/codespaces/{codespace_name}/exports/{export_id}?'));
    }
    function validateResponse()
    {
    }
}
