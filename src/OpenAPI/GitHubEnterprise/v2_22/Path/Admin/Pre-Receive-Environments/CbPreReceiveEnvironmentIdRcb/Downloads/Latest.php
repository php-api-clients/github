<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Admin\Pre-Receive-Environments\CbPreReceiveEnvironmentIdRcb\Downloads;

final class Latest
{
    function get($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
}
