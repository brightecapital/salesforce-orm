<?php
namespace Salesforce\Entity;

use Salesforce\ORM\Annotation as SF;
use Salesforce\ORM\Entity;

/**
 * Salesforce Opportunity
 *
 * @package Salesforce\Entity
 * @SF\Object(name="Opportunity")
 */
class Opportunity extends Entity
{
    /**
     * @var string
     * @SF\Field(name="name")
     * @SF\Required(value=true)
     */
    protected $name;

    /**
     * @var string
     * @SF\Field(name="AccountId")
     * @SF\Required(value=true)
     */
    protected $accountId;

    /**
     * @var string
     * @SF\Field(name="closeDate")
     * @SF\Required(value=true)
     */
    protected $closeDate;

    /**
     * @var string
     * @SF\Field(name="RecordTypeId")
     * @SF\Required(value=true)
     */
    protected $recordTypeId;

    /**
     * @var string
     * @SF\Field(name="StageName")
     * @SF\Required(value=true)
     */
    protected $stage;

    /**
     * @var string
     * @SF\Field(name="OwnerId")
     * @SF\Required(value=true)
     */
    protected $ownerId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name name
     * @return Opportunity
     */
    public function setName($name): Opportunity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId account id
     * @return Opportunity
     */
    public function setAccountId($accountId): Opportunity
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCloseDate(): string
    {
        return $this->closeDate;
    }

    /**
     * @param string $closeDate close date
     * @return Opportunity
     */
    public function setCloseDate($closeDate): Opportunity
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordTypeId(): string
    {
        return $this->recordTypeId;
    }

    /**
     * @param string $recordTypeId record type
     * @return Opportunity
     */
    public function setRecordTypeId($recordTypeId): Opportunity
    {
        $this->recordTypeId = $recordTypeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStage(): string
    {
        return $this->stage;
    }

    /**
     * @param string $stage stage
     * @return Opportunity
     */
    public function setStage($stage): Opportunity
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    /**
     * @param string $ownerId owner
     * @return Opportunity
     */
    public function setOwnerId($ownerId): Opportunity
    {
        $this->ownerId = $ownerId;

        return $this;
    }
}
