<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CEc8B5C9957Fc6E7279Cf6A99F3Db4776
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = 'c_ec8b5c9957fc6e7279cf6a99f3db4776';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A GPG key in ASCII-armored format.
     */
    private string $armored_public_key;
    /**
     * A GPG key in ASCII-armored format.
     */
    public function armored_public_key() : string
    {
        return $this->armored_public_key;
    }
}
