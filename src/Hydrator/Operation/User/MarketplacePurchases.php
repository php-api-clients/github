<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\User;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class MarketplacePurchases implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\UserMarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️UserMarketplacePurchase($payload),
                'ApiClients\Client\Github\Schema\MarketplaceAccount' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount($payload),
                'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️UserMarketplacePurchase(array $payload): \ApiClients\Client\Github\Schema\UserMarketplacePurchase
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['billing_cycle'] ?? null;

            if ($value === null) {
                $missingFields[] = 'billing_cycle';
                goto after_billingCycle;
            }

            $properties['billingCycle'] = $value;

            after_billingCycle:

            $value = $payload['next_billing_date'] ?? null;

            if ($value === null) {
                $properties['nextBillingDate'] = null;
                goto after_nextBillingDate;
            }

            $properties['nextBillingDate'] = $value;

            after_nextBillingDate:

            $value = $payload['unit_count'] ?? null;

            if ($value === null) {
                $properties['unitCount'] = null;
                goto after_unitCount;
            }

            $properties['unitCount'] = $value;

            after_unitCount:

            $value = $payload['on_free_trial'] ?? null;

            if ($value === null) {
                $missingFields[] = 'on_free_trial';
                goto after_onFreeTrial;
            }

            $properties['onFreeTrial'] = $value;

            after_onFreeTrial:

            $value = $payload['free_trial_ends_on'] ?? null;

            if ($value === null) {
                $properties['freeTrialEndsOn'] = null;
                goto after_freeTrialEndsOn;
            }

            $properties['freeTrialEndsOn'] = $value;

            after_freeTrialEndsOn:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['account'] ?? null;

            if ($value === null) {
                $missingFields[] = 'account';
                goto after_account;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'account';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['account'] = $value;

            after_account:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $missingFields[] = 'plan';
                goto after_plan;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'plan';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['plan'] = $value;

            after_plan:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\UserMarketplacePurchase', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\UserMarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\UserMarketplacePurchase(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\UserMarketplacePurchase', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount(array $payload): \ApiClients\Client\Github\Schema\MarketplaceAccount
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['organization_billing_email'] ?? null;

            if ($value === null) {
                $properties['organizationBillingEmail'] = null;
                goto after_organizationBillingEmail;
            }

            $properties['organizationBillingEmail'] = $value;

            after_organizationBillingEmail:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceAccount', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplaceAccount::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplaceAccount(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceAccount', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\Github\Schema\MarketplaceListingPlan
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['accounts_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accounts_url';
                goto after_accountsUrl;
            }

            $properties['accountsUrl'] = $value;

            after_accountsUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $missingFields[] = 'description';
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['monthly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'monthly_price_in_cents';
                goto after_monthlyPriceInCents;
            }

            $properties['monthlyPriceInCents'] = $value;

            after_monthlyPriceInCents:

            $value = $payload['yearly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'yearly_price_in_cents';
                goto after_yearlyPriceInCents;
            }

            $properties['yearlyPriceInCents'] = $value;

            after_yearlyPriceInCents:

            $value = $payload['price_model'] ?? null;

            if ($value === null) {
                $missingFields[] = 'price_model';
                goto after_priceModel;
            }

            $properties['priceModel'] = $value;

            after_priceModel:

            $value = $payload['has_free_trial'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_free_trial';
                goto after_hasFreeTrial;
            }

            $properties['hasFreeTrial'] = $value;

            after_hasFreeTrial:

            $value = $payload['unit_name'] ?? null;

            if ($value === null) {
                $properties['unitName'] = null;
                goto after_unitName;
            }

            $properties['unitName'] = $value;

            after_unitName:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['bullets'] ?? null;

            if ($value === null) {
                $missingFields[] = 'bullets';
                goto after_bullets;
            }

            $properties['bullets'] = $value;

            after_bullets:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplaceListingPlan(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\UserMarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️UserMarketplacePurchase($object),
            'ApiClients\Client\Github\Schema\MarketplaceAccount' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount($object),
            'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️UserMarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\UserMarketplacePurchase);
        $result = [];

        $billingCycle = $object->billingCycle;
        after_billingCycle:        $result['billing_cycle'] = $billingCycle;

        
        $nextBillingDate = $object->nextBillingDate;

        if ($nextBillingDate === null) {
            goto after_nextBillingDate;
        }
        after_nextBillingDate:        $result['next_billing_date'] = $nextBillingDate;

        
        $unitCount = $object->unitCount;

        if ($unitCount === null) {
            goto after_unitCount;
        }
        after_unitCount:        $result['unit_count'] = $unitCount;

        
        $onFreeTrial = $object->onFreeTrial;
        after_onFreeTrial:        $result['on_free_trial'] = $onFreeTrial;

        
        $freeTrialEndsOn = $object->freeTrialEndsOn;

        if ($freeTrialEndsOn === null) {
            goto after_freeTrialEndsOn;
        }
        after_freeTrialEndsOn:        $result['free_trial_ends_on'] = $freeTrialEndsOn;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $account = $object->account;
        $account = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount($account);
        after_account:        $result['account'] = $account;

        
        $plan = $object->plan;
        $plan = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceAccount(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplaceAccount);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $organizationBillingEmail = $object->organizationBillingEmail;

        if ($organizationBillingEmail === null) {
            goto after_organizationBillingEmail;
        }
        after_organizationBillingEmail:        $result['organization_billing_email'] = $organizationBillingEmail;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplaceListingPlan);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $accountsUrl = $object->accountsUrl;
        after_accountsUrl:        $result['accounts_url'] = $accountsUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;
        after_description:        $result['description'] = $description;

        
        $monthlyPriceInCents = $object->monthlyPriceInCents;
        after_monthlyPriceInCents:        $result['monthly_price_in_cents'] = $monthlyPriceInCents;

        
        $yearlyPriceInCents = $object->yearlyPriceInCents;
        after_yearlyPriceInCents:        $result['yearly_price_in_cents'] = $yearlyPriceInCents;

        
        $priceModel = $object->priceModel;
        after_priceModel:        $result['price_model'] = $priceModel;

        
        $hasFreeTrial = $object->hasFreeTrial;
        after_hasFreeTrial:        $result['has_free_trial'] = $hasFreeTrial;

        
        $unitName = $object->unitName;

        if ($unitName === null) {
            goto after_unitName;
        }
        after_unitName:        $result['unit_name'] = $unitName;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $bullets = $object->bullets;
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bullets = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
