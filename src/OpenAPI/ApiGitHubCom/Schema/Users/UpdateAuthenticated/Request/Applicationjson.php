<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Users\UpdateAuthenticated\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"name":{"type":"string","description":"The new name of the user.","examples":["Omar Jahandar"]},"email":{"type":"string","description":"The publicly visible email address of the user.","examples":["omar@example.com"]},"blog":{"type":"string","description":"The new blog URL of the user.","examples":["blog.example.com"]},"twitter_username":{"type":["string","null"],"description":"The new Twitter username of the user.","examples":["therealomarj"]},"company":{"type":"string","description":"The new company of the user.","examples":["Acme corporation"]},"location":{"type":"string","description":"The new location of the user.","examples":["Berlin, Germany"]},"hireable":{"type":"boolean","description":"The new hiring availability of the user."},"bio":{"type":"string","description":"The new short biography of the user."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the user.
     */
    public ?string $name;
    /**
     * The publicly visible email address of the user.
     */
    public ?string $email;
    /**
     * The new blog URL of the user.
     */
    public ?string $blog;
    /**
     * The new Twitter username of the user.
     */
    public ?string $twitter_username;
    /**
     * The new company of the user.
     */
    public ?string $company;
    /**
     * The new location of the user.
     */
    public ?string $location;
    /**
     * The new hiring availability of the user.
     */
    public ?bool $hireable;
    /**
     * The new short biography of the user.
     */
    public ?string $bio;

    public function __construct(string $name, string $email, string $blog, string $twitter_username, string $company, string $location, bool $hireable, string $bio)
    {
        $this->name             = $name;
        $this->email            = $email;
        $this->blog             = $blog;
        $this->twitter_username = $twitter_username;
        $this->company          = $company;
        $this->location         = $location;
        $this->hireable         = $hireable;
        $this->bio              = $bio;
    }
}
