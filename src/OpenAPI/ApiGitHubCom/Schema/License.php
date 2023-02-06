<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class License
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","url","spdx_id","node_id","html_url","description","implementation","permissions","conditions","limitations","body","featured"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri","examples":["http:\\/\\/choosealicense.com\\/licenses\\/mit\\/"]},"description":{"type":"string","examples":["A permissive license that is short and to the point. It lets people do anything with your code with proper attribution and without warranty."]},"implementation":{"type":"string","examples":["Create a text file (typically named LICENSE or LICENSE.txt) in the root of your source code and copy the text of the license into the file. Replace [year] with the current year and [fullname] with the name (or names) of the copyright holders."]},"permissions":{"type":"array","items":{"type":"string"},"examples":["commercial-use","modifications","distribution","sublicense","private-use"]},"conditions":{"type":"array","items":{"type":"string"},"examples":["include-copyright"]},"limitations":{"type":"array","items":{"type":"string"},"examples":["no-liability"]},"body":{"type":"string","examples":["\\n\\nThe MIT License (MIT)\\n\\nCopyright (c) [year] [fullname]\\n\\nPermission is hereby granted, free of charge, to any person obtaining a copy\\nof this software and associated documentation files (the \\"Software\\"), to deal\\nin the Software without restriction, including without limitation the rights\\nto use, copy, modify, merge, publish, distribute, sublicense, and\\/or sell\\ncopies of the Software, and to permit persons to whom the Software is\\nfurnished to do so, subject to the following conditions:\\n\\nThe above copyright notice and this permission notice shall be included in all\\ncopies or substantial portions of the Software.\\n\\nTHE SOFTWARE IS PROVIDED \\"AS IS\\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\\nIMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\\nFITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\\nAUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\\nLIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\\nOUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE\\nSOFTWARE.\\n"]},"featured":{"type":"boolean","examples":[true]}},"description":"License"}';
    public const SCHEMA_EXAMPLE = '{"key":"mit","name":"MIT License","spdx_id":"MIT","url":"https:\\/\\/api.github.com\\/licenses\\/mit","node_id":"MDc6TGljZW5zZW1pdA==","html_url":"http:\\/\\/choosealicense.com\\/licenses\\/mit\\/","description":"A permissive license that is short and to the point. It lets people do anything with your code with proper attribution and without warranty.","implementation":"Create a text file (typically named LICENSE or LICENSE.txt) in the root of your source code and copy the text of the license into the file. Replace [year] with the current year and [fullname] with the name (or names) of the copyright holders.","permissions":"modifications","conditions":"include-copyright","limitations":"no-liability","body":"\\n\\nThe MIT License (MIT)\\n\\nCopyright (c) [year] [fullname]\\n\\nPermission is hereby granted, free of charge, to any person obtaining a copy\\nof this software and associated documentation files (the \\"Software\\"), to deal\\nin the Software without restriction, including without limitation the rights\\nto use, copy, modify, merge, publish, distribute, sublicense, and\\/or sell\\ncopies of the Software, and to permit persons to whom the Software is\\nfurnished to do so, subject to the following conditions:\\n\\nThe above copyright notice and this permission notice shall be included in all\\ncopies or substantial portions of the Software.\\n\\nTHE SOFTWARE IS PROVIDED \\"AS IS\\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\\nIMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\\nFITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\\nAUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\\nLIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\\nOUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE\\nSOFTWARE.\\n","featured":true}';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = 'License';
    public readonly string $key;
    public readonly string $name;
    public readonly ?string $spdx_id;
    public readonly ?string $url;
    public readonly string $node_id;
    public readonly string $html_url;
    public readonly string $description;
    public readonly string $implementation;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Permissions>
     */
    public readonly array $permissions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Conditions>
     */
    public readonly array $conditions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Limitations>
     */
    public readonly array $limitations;
    public readonly string $body;
    public readonly bool $featured;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Permissions> $permissions
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Conditions> $conditions
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\License\Limitations> $limitations
     */
    public function __construct(string $key, string $name, string $spdx_id, string $url, string $node_id, string $html_url, string $description, string $implementation, array $permissions, array $conditions, array $limitations, string $body, bool $featured)
    {
        $this->key = $key;
        $this->name = $name;
        $this->spdx_id = $spdx_id;
        $this->url = $url;
        $this->node_id = $node_id;
        $this->html_url = $html_url;
        $this->description = $description;
        $this->implementation = $implementation;
        $this->permissions = $permissions;
        $this->conditions = $conditions;
        $this->limitations = $limitations;
        $this->body = $body;
        $this->featured = $featured;
    }
}
