<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C76D23Faf633D1F3Aba2698C83C42A5Fb
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = 'c_76d23faf633d1f3aba2698c83c42a5fb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    private ?string $name = null;
    /**
     * A GPG key in ASCII-armored format.
     */
    private string $armored_public_key;
    /**
     * A descriptive name for the new key.
     */
    public function name() : ?string
    {
        return $this->name;
    }
    /**
     * A GPG key in ASCII-armored format.
     */
    public function armored_public_key() : string
    {
        return $this->armored_public_key;
    }
}
