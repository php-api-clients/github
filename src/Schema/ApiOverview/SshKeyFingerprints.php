<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ApiOverview;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SshKeyFingerprints
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"SHA256_RSA":"generated","SHA256_DSA":"generated","SHA256_ECDSA":"generated","SHA256_ED25519":"generated"}';

    public function __construct(#[MapFrom('SHA256_RSA')]
    public string|null $shaTwoHundredFiftySixRsa, #[MapFrom('SHA256_DSA')]
    public string|null $shaTwoHundredFiftySixDsa, #[MapFrom('SHA256_ECDSA')]
    public string|null $shaTwoHundredFiftySixEcdsa, #[MapFrom('SHA256_ED25519')]
    public string|null $shaTwoHundredFiftySixEdTwentyFiveThousandFiveHundredNineteen,)
    {
    }
}
