<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C7A13F117C17A60D6A4D75Bfd0Bb52Fc6
{
    public const SCHEMA_JSON = '{"required":["category"],"type":"object","properties":{"category":{"required":["from"],"type":"object","properties":{"from":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'c_7a13f117c17a60d6a4d75bfd0bb52fc6';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C40Ba99Cd7F00C46796D1Dba235F4B592::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C40Ba99Cd7F00C46796D1Dba235F4B592 $category;
    public function category() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C40Ba99Cd7F00C46796D1Dba235F4B592
    {
        return $this->category;
    }
}
