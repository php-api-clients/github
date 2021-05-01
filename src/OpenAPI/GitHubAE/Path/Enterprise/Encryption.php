<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Enterprise;

final class Encryption
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetEncryptionKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetEncryptionKeyOperation();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableEncryptionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableEncryptionOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateEncryptionKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateEncryptionKeyOperation();
    }
}
