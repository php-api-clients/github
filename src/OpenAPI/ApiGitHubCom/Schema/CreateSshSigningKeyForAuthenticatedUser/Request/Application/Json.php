<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateSshSigningKeyForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) |^(sk-ssh-ed25519|sk-ecdsa-sha2-nistp256)@openssh.com ","type":"string","description":"The public SSH key to add to your GitHub account. For more information, see \\"[Checking for existing SSH keys](https:\\/\\/docs.github.com\\/authentication\\/connecting-to-github-with-ssh\\/checking-for-existing-ssh-keys).\\""}}}';
    public const SCHEMA_TITLE = 'CreateSshSigningKeyForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A descriptive name for the new key.
     */
    public readonly ?string $title;
    /**
     * The public SSH key to add to your GitHub account. For more information, see "[Checking for existing SSH keys](https://docs.github.com/authentication/connecting-to-github-with-ssh/checking-for-existing-ssh-keys)."
     */
    public readonly string $key;
    public function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key = $key;
    }
}