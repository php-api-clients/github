<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Admin\Pre-Receive-Environments\CbPreReceiveEnvironmentIdRcb;

final class Downloads
{
    function post($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadOperation($pre_receive_environment_id);
    }
}
