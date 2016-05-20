<<?php
/**
 * Class Project
 *
 * This class handles projects posted to site
 *
 * @author Ryam Sam rnsam@asu.edu
 **/


require_once("dateValidation.php");




class DevProject implements JsonSerializable
{
    /**
     *id for a project this is primary key
     * @var int $projectId
     */
    private $projectId;

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
     * attaches key for user posting projects
     * @var int $title foreign key for userId
     */
    private $title;

    /**
     * Project constructor.
     *
     * @param  int|null $newProjectId
     * @param DateTime $newEndDate
     * @param DateTime $newStartDate
     * @param string $title
     * @throws InvalidArgumentException
     * @throws RangeException
     * @throws Exception
     */
    public function __construct($newProjectId, $newEndDate, $newStartDate, $title)
    {
        try {
            $this->setProjectId($newProjectId);
            $this->setEndDate($newEndDate);
            $this->setStartDate($newStartDate);
            $this->setTitle($title);

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
     * @throws InvalidArgumentException for invalid content
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
            throw (new InvalidArgumentException ("projectId invalid"));
        }
        $this->projectId = $newProjectId;
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
     * Mutator method for End Date
     *
     * @param string DevProject category $newEndDate
     * @throws InvalidArgumentException
     * @throws RangeException
     * @throws Exception
     */
    public function setEndDate($newEndDate)
    {
        // verify end date is valid
        try {
            $newEndDate = validateDate($newEndDate);
        } catch (InvalidArgumentException $invalidArgument) {
            throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        } catch (RangeException $range) {
            throw(new RangeException($range->getMessage(), 0, $range));
        } catch (Exception $exception) {
            throw(new Exception($exception->getMessage(), 0, $exception));
        }
        $this->endDate = $newEndDate;
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
     * @param string DevProject category $newStartDate
     * @throws InvalidArgumentException
     * @throws RangeException
     * @throws Exception
     */
    public function setStartDate($newStartDate)
    {
        // verify date is valid
        try {
            $newStartDate = validateDate($newStartDate);
        } catch (InvalidArgumentException $invalidArgument) {
            throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        } catch (RangeException $range) {
            throw(new RangeException($range->getMessage(), 0, $range));
        } catch (Exception $exception) {
            throw(new Exception($exception->getMessage(), 0, $exception));
        }

        $this->startDate = $newStartDate;
    }

    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        return ($fields);
    }

    /**
     * accessor method for title
     *
     * @return int
     **/
    public function getTitle()
    {
        return ($this->title);
    }

    /**
     * Mutator method for title
     *
     * @param $newTitle int
     * @throws InvalidArgumentException if title is invalid
     **/
    public function setTitle($newTitle)
    {
        // verify access level is integer
        $newTitle = filter_var($newTitle, FILTER_VALIDATE_INT);
        if (empty($newTitle) === true) {
            throw new InvalidArgumentException ("Title Invalid");
        }
        $this->title = $newTitle;
    }

    /**
     * Get project by projectId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int DevProject unique projectId $projectId
     * @return mixed|DevProject
     **/
    public static function getProjectByProjectId(PDO $pdo, $projectId)
    {

        // sanitize the bulletinId before searching
        $projectId = filter_var($projectId, FILTER_VALIDATE_INT);

        if ($projectId === false) {
            throw(new PDOException("project id is not an integer"));
        }
        if ($projectId <= 0) {
            throw(new PDOException("project id is not positive"));
        }
        // create query template
        $query = "SELECT projectId, endDate, startDate, title FROM project WHERE projectId = :projectId";
        $statement = $pdo->prepare($query);
        // bind the project id to the place holder in the template
        $parameters = array("projectId" => $projectId);
        $statement->execute($parameters);

        //call the function to build an array of the values
        $project = null;
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $row = $statement->fetch();
            try {
                if ($row !== false) {
                    $project = new DevProject($row["projectId"], $row["endDate"], $row["startDate"], $row["title"]);
                    $projectId[$projectId->key()] = $project;
                    $projectId->next();
                }
            } catch (Exception $exception) {

                throw(new PDOException($exception->getMessage(), 0, $exception));
            }


        return $project;
    }

    /**
     * Get all Projects
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @return mixed| DevProject
     **/
    public static function getAllProjects(PDO $pdo) {
        //create the query template
        $query = "SELECT projectId, endDate, startDate, title FROM project";
        $statement = $pdo->prepare($query);
        // execute
        $statement->execute();
        //call the function to build an array of the values
        $projects = null;
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $projects = new SplFixedArray($statement->rowCount());
        while(($row = $statement->fetch()) !== false) {
            try {
                if($row !== false) {
                    $project = new DevProject($row["projectId"], $row["endDate"], $row["startDate"], $row["title"]);
                    $projects[$projects->key()] = $project;
                    $projects->next();
                }
            } catch(Exception $exception) {

                throw(new PDOException($exception->getMessage(), 0, $exception));
            }
        }

        return $projects;
    }

    /**
     * Inserts Project into mySQL
        *
     * Inserts this projectId into mySQL in intervals
        * @param PDO $pdo connection to
        **/
    public function insert(PDO &$pdo)
            {
                // make sure project doesn't already exist
                if ($this->projectId !== null) {
            throw (new PDOException("existing project"));
        }
        //create query template
        $query
            = "INSERT INTO project(projectId, endDate, startDate, title)" .
            "VALUES (:projectId, :endDate, :startDate, :title)";
        $statement = $pdo->prepare($query);

        // bind the variables to the place holders in the template
        $parameters = array("projectId" => $this->projectId, "endDate" => $this->endDate, "startDate" => $this->startDate, "title" => $this->title);
        $statement->execute($parameters);

        //update null projectId with what mySQL just gave us
        $this->projectId = intval($pdo->lastInsertId());
    }

    /**
     * Deletes Project from mySQL
     *
     * Delete PDO to delete projectId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo)
    {
        // enforce the project is not null
        if ($this->projectId === null) {
            throw(new PDOException("unable to delete a project that does not exist"));
        }

        //create query template
        $query = "DELETE FROM project WHERE projectId = :projectId";
        $statement = $pdo->prepare($query);

        //bind the member variables to the place holder in the template
        $parameters = array("projectId" => $this->projectId);
        $statement->execute($parameters);
    }

    /**
     * updates Message in mySQL
     *
     * Update PDO to update project class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo)
    {

        // create query template
        $query = "UPDATE project SET  endDate = :endDate, startDate = :startDate, title = :title WHERE projectId = :projectId";
        $statement = $pdo->prepare($query);

        // bind the member variables
        $parameters = array("endDate" => $this->endDate, "startDate" => $this->startDate, "title" => $this->title, "projectId" => $this->projectId);
        $statement->execute($parameters);

    }
}// end class