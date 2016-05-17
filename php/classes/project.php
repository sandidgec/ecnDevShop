<<?php
/**
 * Class Project
 *
 * This class handles projects posted to site
 *
 * @author Ryam Sam rnsam@asu.edu
 **/
class Project implements JsonSerializable {
    /**
     *id for a project this is primary key
     * @var int $projectId
     */
    private $projectId;
    /**
     * attaches key for user posting projects
     * @var int $employeeId foreign key for userId
     */
    private $employeeId;
    /**
     * describes a project end date
     * @var string for cnd date of the project
     */
    private $endDate;
    /**
     * describes start date
     * @var string for the end date of the project
     */
    private $startDate;
    /**
     * Project constructor.
     * @param $newProjectId
     * @param $newEmployeeId
     * @param $newEndDate
     * @param $newStartDate
     */
    public function __construct($newProjectId, $newEmployeeId, $newEndDate, $newStartDate)
    {
        try {
            $this->$setProjectId($newProjectId);
            $this->$setEmployeeId($newEmployeeId);
            $this->$setEndDate($newEndDate);
            $this->$setStartDate($newStartDate);
        } catch (InvalidArgumentException $invalidArgument) {
            //rethrow the exception to the caller
            throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        } catch (RangeException $range) {
            // rethrow the exception to the caller
            throw (new RangeException($range->getMessage(), 0, $range));
        } catch (Exception $exception) {
            // rethrow generic exception
            throw(new Exception($exception->getMessage(), 0, $exception));
        }
    }
    /**
     * accessor method for projectId
     *
     * @return int value of unique projectId
     **/
    public function getProjectId()
    {
        return ($this->projectId);
    }
    /**
     * mutator method for the projectId
     *
     * @param int unique value to represent a user $newProjectId
     * @throws InvalidArgumentException for invalid content
     **/
    public function setProjectId($newProjectId)
    {
        // base case: if the projectId is null,
        // this is a new prjoect without a mySQL assigned id (yet)
        if ($newProjectId === null) {
            $this->projectId = null;
            return;
        }
        //verify the User is valid
        $newProjectId = filter_var($newProjectId, FILTER_VALIDATE_INT);
        if (empty($newProjectId) === true) {
            throw (new InvalidArgumentException ("projectId invalid"));
        }
        $this->projectId = $newProjectId;
    }
    /**
     * accessor method for employeeId
     *
     * @return int
     **/
    public function getemployeeId() {
        return ($this->employeeId);
    }
    /**
     * Mutator method for employeeId
     *
     * @param $newEmployeeId int
     * @throws InvalidArgumentException if userId is invalid
     **/
    public function setEmployeeId($newEmployeeId) {
        // verify access level is integer
        $newEmployeeId = filter_var($newEmployeeId, FILTER_VALIDATE_INT);
        if(empty($newEmployeeId) === true) {
            throw new InvalidArgumentException ("Employee Id Invalid");
        }
        $this->employeeId = $newEmployeeId;
    }
    /**
     * accessor method for end date
     *
     * @return string of end date
     **/
    public function getEndDate()
    {
        return ($this->endDate);
    }
    /**
     * Mutator method for End  Date
     *
     * @param string Project category $newEndDate
     */
    public function setEndDate($newEndDate)
    {
        // verify end date is valid
        $newEndDate = filter_var($newEndDate, FILTER_SANITIZE_STRING);
        if (empty($newEndDate) === true) {
            throw new InvalidArgumentException("end date invalid");
        }
        if (strlen($newEndDate) > 32) {
            throw (new RangeException ("end date name too large"));
        }
        $this->category = $newEndDate;
    }
    /**
     * accessor method for start date
     *
     * @return string of start date
     **/
    public function getStartDate()
    {
        return ($this->startDate);
    }
    /**
     * Mutator method for Start Date
     *
     * @param string project category $newStartDate
     */
    public function setStartDate($newStartDate)
    {
        // verify message is valid
        $newStartDate = filter_var($newStartDate, FILTER_SANITIZE_STRING);
        if (empty($newStartDate) === true) {
            throw new InvalidArgumentException("start date invalid");
        }
        $this->category = $newStartDate;
    }
    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        return ($fields);
    }