<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Sarifs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\UploadSarifOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\UploadSarifOperation($owner, $repo);
    }
}
