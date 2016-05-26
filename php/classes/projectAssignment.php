<?php
/**
 * Class Project Assignment 
 *
 * This class handles Project Assignments posted to site
 *
 * @author Charles Sandidge charles@cultivatingcoders.com
 **/
class ProjectAssignment implements JsonSerializable
{
    /**
     *id for a Project Assignment this is a key
     * @var int $projectId
     */
    private $projectId;/**
     *id for a Project Assignment this is key
     * @var int $employeeId
     */
    private $employeeId;
    /**
     * this is for salary
     * @var float $employAlot for employAlot
     */
    private $employAlot;

    /**
     * projectAssignment constructor.
     *
     * @param int $newProjectId
     * @param int $newEmployeeId
     * @param float $newEmployAlot
     * @throws InvalidArgumentException
     * @throws RangeException
     * @throws  Exception
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
        //verify the projectId is valid
        $newProjectId = filter_var($newProjectId, FILTER_VALIDATE_INT);
        if ($newProjectId === false) {
            throw (new InvalidArgumentException ("projectId invalid"));
        }
        if ($newProjectId < 0){
            throw (new RangeException("newProject cannot be less than zero."));
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

        //verify the Employee is valid
        $newEmployeeId = filter_var($newEmployeeId, FILTER_VALIDATE_INT);
        if ($newEmployeeId === false) {
            throw (new InvalidArgumentException ("employeeId invalid"));
        }

        if ($newEmployeeId < 0){
            throw (new RangeException("newEmployeeId cannot be less than zero."));
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
     * @param float $newemployAlot value to represent an Employee Allotment $newemployAlot
     * @throws InvalidArgumentException for invalid content
     **/
    public function setEmployAlot($newEmployAlot)
    {

        //verify the Employee Allotment is valid
        $newEmployAlot = filter_var($newEmployAlot, FILTER_VALIDATE_FLOAT);
        if ($newEmployAlot === false) {
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

        //create query template
        $query
            = "INSERT INTO projectAssignment(employAlot, projectId, employeeId)" .
            "VALUES (:projectId, :employeeId, :employAlot)";
        $statement = $pdo->prepare($query);

        // bind the variables to the place holders in the template
        $parameters = array("projectId" => $this->projectId, "employeeId" => $this->employeeId, "employAlot" => $this->employAlot);
        $statement->execute($parameters);


    }

    /**
     * Deletes projectAssignment from mySQL
     *
     * Delete PDO to delete projectId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo) {
        // enforce the projectAssignment is not null
        if($this->projectId === null) {
            throw(new PDOException("unable to delete a projectAssignment that does not exist"));
        }
        //create query template
        $query = "DELETE FROM projectAssignment WHERE projectId = :projectId AND employeeId = :employeeId";
        $statement = $pdo->prepare($query);

        //bind the member variables to the place holder in the template
        $parameters = array("projectId" => $this->projectId, "employeeId => $this->employeeId");
        $statement->execute($parameters);
    }
    /**
     * updates projectAssignment in mySQL
     *
     * Update PDO to update projectAssignment class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo) {
        // create query template
        $query = "UPDATE projectAssignment SET projectId = :projectId, employeeId = :employeeId, employAlot = :employAlot WHERE projectId = :projectId";
        $statement = $pdo->prepare($query);

        // bind the member variables
        $parameters = array("projectId" => $this->projectId, "employeeId" => $this->employeeId, "employAlot" => $this->employAlot);
        $statement->execute($parameters);
    }

    /**
     * Get projectAssignment by projectId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int projectAssignment unique projectId $projectId
     * @return mixed|projectAssignment
     **/
    public static function getProjectAssignmentByProjectId (PDO $pdo, $projectId) {
        // sanitize the bulletinId before searching
        $projectId = filter_var($projectId, FILTER_VALIDATE_INT);
        if($projectId === false) {
            throw(new PDOException("project id is not an integer"));
        }
        if($projectId <= 0) {
            throw(new PDOException("project id is not positive"));
        }

        // create query template
        $query = "SELECT projectId, employeeId,employAlot  FROM projectAssignment WHERE projectId = :projectId";
        $statement = $pdo->prepare($query);
        // bind the bulletin id to the place holder in the template
        $parameters = array("projectId" => $projectId);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $projectId = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $projectId = new projectAssignment($row["projectId"], $row["employeeId"], $row["employAlot"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($projectId);
    }

    /**
     * Get projectAssignment by EmployeeId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int projectAssignment unique employeeId $employeeId
     * @return mixed|projectAssignment
     **/

    public static function getProjectAssignmentByEmployeeId (PDO $pdo, $employeeId) {
        // sanitize the bulletinId before searching
        $employeeId = filter_var($employeeId, FILTER_VALIDATE_INT);
        if($employeeId === false) {
            throw(new PDOException("employee id is not an integer"));
        }
        if($employeeId <= 0) {
            throw(new PDOException("employee id is not positive"));
        }

        // create query template
        $query = "SELECT projectId, employeeId,employAlot  FROM projectAssignment WHERE employeeId = :employeeId";
        $statement = $pdo->prepare($query);
        // bind the bulletin id to the place holder in the template
        $parameters = array("employeeId" => $employeeId);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $projectId = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $projectId = new projectAssignment($row["projectId"], $row["employeeId"], $row["employAlot"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($projectId);
    }

    /**
     * Get all projectAssignment
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @return mixed|projectAssignment
     **/
    public static function getAllProjectAssignments(PDO &$pdo) {
        // create query template
        $query = "SELECT projectId, employeeId, employAlot FROM projectAssignment";
        $statement = $pdo->prepare($query);
        // grab the bulletin from mySQL
        try {
            $projectId = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $projectId = new projectAssignment($row["projectId"], $row["employeeId"], $row["employAlot"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($projectId);
    }


    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        return ($fields);
    }
}  //end class