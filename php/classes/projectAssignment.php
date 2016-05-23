<?php
/**
 * Class Project Assignment 
 *
 * This class handles Project Assignments posted to site
 *
 * @author Charles Sandidge charles@cultivatingcoders.com
 **/
class projectAssignment implements JsonSerializable
{
    /**
     *id for a Project Assignment this is primary key
     * @var int $projectId
     */
    private $projectId;/**
     *id for a Project Assignment this is primary key
     * @var int $employeeId
     */
    private $employeeId;
    /**
     * this is for salary
     * @var int $employAlot foreign key for employAlot
     */
    private $employAlot;

    /**
     * projectAssignment constructor.
     * @param $newProjectId
     * @param $newEmployeeId
     * @param $newEmployalot
     */
    public function __construct($newProjectId, $newEmployeeId, $newEmployAlot)
    {
        try {
            $this->setProjectId($newProjectId);
            $this->setEmployeeId($newEmployeeId);
            $this->setEmployAlot($newEmployAlot);

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
     * @param int $newProjectId unique value to represent a user $newProjectId
     * @throws \InvalidArgumentException for invalid content
     **/
    public function setProjectId($newProjectId)
    {
        // base case: if the projectId is null,
        // this is a new project without a mySQL assigned id (yet)
        if ($newProjectId === null) {
            $this->projectId = null;
            return;
        }
        //verify the projectId is valid
        $newProjectId = filter_var($newProjectId, FILTER_VALIDATE_INT);
        if (empty($newProjectId) === true) {
            throw (new \InvalidArgumentException ("projectId invalid"));
        }
        $this->projectId = $newProjectId;
    }

    /**
     * accessor method for employeeId
     *
     * @return int value of unique employeeId
     **/
    public function getEmployeeId()
    {
        return ($this->employeeId);
    }

    /**
     * mutator method for the employeeId
     *
     * @param int $newEmployeeId unique value to represent a employee $newEmployeeId
     * @throws InvalidArgumentException for invalid content
     **/
    public function setEmployeeId($newEmployeeId)
    {
        // base case: if the employeeId is null,
        // this is a new user without a mySQL assigned id (yet)
        if ($newEmployeeId === null) {
            $this->employeeId = null;
            return;
        }
        //verify the Employee is valid
        $newEmployeeId = filter_var($newEmployeeId, FILTER_VALIDATE_INT);
        if (empty($newEmployeeId) === true) {
            throw (new InvalidArgumentException ("employeeId invalid"));
        }
        $this->employeeId = $newEmployeeId;
    }


    /**
     * accessor method for employAlot
     *
     * @return int value of unique bulletinId
     **/
    public function getEmployAlot()
    {
        return ($this->employAlot);
    }
    /**
     * mutator method for the employAlot
     *
     * @param int $newemployAlot value to represent an Employee Allotment $newemployAlot
     * @throws InvalidArgumentException for invalid content
     **/
    public function setEmployAlot($newEmployAlot)
    {
        // base case: if the emloyAlot is null,
        // this is a new Employee Allotment without a mySQL assigned id (yet)
        if ($newEmployAlot === null) {
            $this->employAlot = null;
            return;
        }
        //verify the Employee Allotment is valid
        $newEmployAlot = filter_var($newEmployAlot, FILTER_VALIDATE_INT);
        if (empty($newEmployAlot) === true) {
            throw (new InvalidArgumentException ("Employee Allotment invalid"));
        }
        $this->employAlot = $newEmployAlot;
    }


    /**
     * Inserts projectAssignment into mySQL
     *
     * Inserts this projectAssignment into mySQL in intervals
     * @param PDO $pdo connection to
     **/
    public function insert(PDO &$pdo)
    {
        // make sure Project Assignment doesn't already exist
        if ($this->projectAssignment !== null) {
            throw (new PDOException("existing Project Assignment"));
        }
        //create query template
        $query
            = "INSERT INTO projectAssignment(employAlot, projectId, employeeId)" .
            "VALUES (:projectId, :employeeId, :employAlot)";
        $statement = $pdo->prepare($query);

        // bind the variables to the place holders in the template
        $parameters = array("projectId" => $this->projectId, "employeeId" => $this->employeeId, "employAlot" => $this->employAlot);
        $statement->execute($parameters);

        //update null bulletinId with what mySQL just gave us
        $this->bulletinId = intval($pdo->lastInsertId());
    }

    /**
     * Deletes Bulletin from mySQL
     *
     * Delete PDO to delete bulletinId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo) {
        // enforce the bulletin is not null
        if($this->bulletinId === null) {
            throw(new PDOException("unable to delete a bulletin that does not exist"));
        }
        //create query template
        $query = "DELETE FROM bulletin WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        //bind the member variables to the place holder in the template
        $parameters = array("bulletinId" => $this->bulletinId);
        $statement->execute($parameters);
    }
    /**
     * updates Message in mySQL
     *
     * Update PDO to update bulletin class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo) {
        // create query template
        $query = "UPDATE bulletin SET userId = :userId, category = :category, message = :message WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        // bind the member variables
        $parameters = array("userId" => $this->userId, "category" => $this->category, "message" => $this->message,
            "bulletinId" => $this->bulletinId);
        $statement->execute($parameters);
    }
    /**
     * Get bulletin by bulletinId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int for unique bulletinId $bulletinId
     * @return mixed|Bulletin
     **/
    public static function getBulletinByBulletinId(PDO $pdo, $bulletinId) {
        // sanitize the bulletinId before searching
        $bulletinId = filter_var($bulletinId, FILTER_VALIDATE_INT);
        if($bulletinId === false) {
            throw(new PDOException("bulletin id is not an integer"));
        }
        if($bulletinId <= 0) {
            throw(new PDOException("bulletin id is not positive"));
        }
        // create query template
        $query = "SELECT bulletinId, userId, category, message FROM user WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        // bind the bulletin id to the place holder in the template
        $parameters = array("bulletinId" => $bulletinId);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $bulletin = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["userId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }
    /**
     * get bulletin by category
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param mixed info for $bulletin
     * @return null|Bulletin
     **/
    public static function getBulletinByCategory(PDO &$pdo, $bulletin) {
        if($bulletin === false) {
            throw(new PDOException(""));
        }
        // create query template
        $query = "SELECT bulletinId, userId, category, message
        FROM bulletin WHERE category = :category";
        $statement = $pdo->prepare($query);
        // bind the bulletinid to the place holder in the template
        $parameters = array("category" => $bulletin);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $bulletin= null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["userId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }
    /**
     * Get all Bulletins
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @return mixed|Bulletin
     **/
    public static function getAllBulletins(PDO &$pdo) {
        // create query template
        $query = "SELECT bulletinId, userId, category, message FROM bulletin";
        $statement = $pdo->prepare($query);
        // grab the bulletin from mySQL
        try {
            $bulletin = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["userId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }
}