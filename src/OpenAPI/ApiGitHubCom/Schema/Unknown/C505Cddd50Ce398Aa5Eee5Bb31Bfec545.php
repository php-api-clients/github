<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C505Cddd50Ce398Aa5Eee5Bb31Bfec545
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) |^(sk-ssh-ed25519|sk-ecdsa-sha2-nistp256)@openssh.com ","type":"string","description":"The public SSH key to add to your GitHub account. For more information, see \\"[Checking for existing SSH keys](https:\\/\\/docs.github.com\\/authentication\\/connecting-to-github-with-ssh\\/checking-for-existing-ssh-keys).\\""}}}';
    public const SCHEMA_TITLE = 'c_505cddd50ce398aa5eee5bb31bfec545';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    private ?string $title = null;
    /**
     * The public SSH key to add to your GitHub account. For more information, see "[Checking for existing SSH keys](https://docs.github.com/authentication/connecting-to-github-with-ssh/checking-for-existing-ssh-keys)."
     */
    private string $key;
    /**
     * A descriptive name for the new key.
     */
    public function title() : ?string
    {
        return $this->title;
    }
    /**
     * The public SSH key to add to your GitHub account. For more information, see "[Checking for existing SSH keys](https://docs.github.com/authentication/connecting-to-github-with-ssh/checking-for-existing-ssh-keys)."
     */
    public function key() : string
    {
        return $this->key;
    }
}
