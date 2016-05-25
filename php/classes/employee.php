<?php
/**
 * Class Employee for sites employee base
 *
 * This class handles employee
 *
 *
 */
class Employee implements JsonSerializable
{
    /**
     * id for this employee; this is the primary key
     * @var int $employeeId
     **/
    private $employeeId;
    /**
     * access level id to identify user groups
     * @var int for accessLevelId
     **/
    private $accessLevelId;
    /**
     * address of employee
     * @var int $address1
     **/
    private $address1;
    /**
     * address of employee
     * @var int $address2
     **/
    private $address2;
    /**
     * city for the employee
     * @var string for $city
     **/
    private $city;
    /**
     * email for the employee
     * @var string for $email
     **/
    private $email;
    /**
     * first name of the employee
     * @var string for $firstName
     **/
    private $firstName;
    /**
     * hash of password w/ salt
     * @var string for password hash
     **/
    private $hash;
    /**
     * last name of the employee
     * @var string for $lastName
     **/
    private $lastName;
    /**
     * phone number of employee
     * @var int $phone
     **/
    private $phone;
    /**
     * salt of password w/ hash
     * @var string for password salt
     **/
    private $salt;
    /**
     * state of employee
     * @var int $state
     **/
    private $state;
    /**
     * status of employee
     * @var int $status
     **/
    private $status;
    /**
     * zip of employee
     * @var int $zip
     **/
    private $zip;


    /**
     * User constructor.
     * @param $newEmployeeId
     * @param $newAccessLevelId
     * @param $newAddress1
     * @param $newAddress2
     * @param $newCity
     * @param $newEmail
     * @param $newFirstName
     * @param $newHash
     * @param $newLastName
     * @param $newPhone
     * @param $newSalt
     * @param $newState
     * @param $newStatus
     * @param $newZip
     * @throws Exception
     */
    public function __construct($newEmployeeId, $newAccessLevelId, $newAddress1, $newAddress2, $newCity, $newEmail, $newFirstName, $newHash, $newLastName,
                                $newPhone, $newSalt, $newState, $newStatus, $newZip)
    {
        try {
            $this->setEmployeeId($newEmployeeId);
            $this->setAccessLevelId($newAccessLevelId);
            $this->setAddress1($newAddress1);
            $this->setAddress2($newAddress2);
            $this->setCity($newCity);
            $this->setEmail($newEmail);
            $this->setFirstName($newFirstName);
            $this->setHash($newHash);
            $this->setLastName($newLastName);
            $this->setPhone($newPhone);
            $this->setSalt($newSalt);
            $this->setState($newState);
            $this->setStatus($newStatus);
            $this->setZip($newZip);
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
     * accessor method for employeeId
     *
     * @return int value of unique employeeId
     **/
    public function getEmployeeId()
    {
        return ($this->employeeId);
    }

    /**
     * mutator method for the userId
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
     * accessor method for access level of employee
     *
     * @return mixed
     **/
    public function getAccessLevelId() {
        return ($this->accessLevelId);
    }
    /**
     * Mutator method for access levelId
     *
     * @param $newAccessLevelId int
     * @throws InvalidArgumentException if access level is invalid
     **/
    public function setAccessLevelId($newAccessLevelId) {
        // verify access level is integer
        $newAccessLevelId = filter_var($newAccessLevelId, FILTER_SANITIZE_STRING);
        if(empty($newAccessLevelId) === true) {
            throw new InvalidArgumentException ("Access Level Invalid");
        }
        $this->accessLevelId = $newAccessLevelId;
    }


    /**
     * accessor method for address line 1
     *
     * @return string for address line 1
     **/
    public function getAddress1()
    {
        return ($this->address1);
    }

    /**
     * Mutator method for Address Line 1
     * @throws RangeException
     * @param string $newAddress1 employee address1 $newAddress1
     */
    public function setAddress1($newAddress1) {

        $newAddress1 = filter_var($newAddress1, FILTER_SANITIZE_STRING);

        if ( $newAddress1 === false) {
            throw (new InvalidArgumentException("New Address 1 is invalid"));
        }

        if (strlen($newAddress1) > 76) {
            throw (new RangeException ("Address1 content too large"));
        }
        $this->address1 = $newAddress1;
    }

    /**
     * accessor method for address line 2
     *
     * @return string for address line 2
     **/
    public function getAddress2()
    {
        return ($this->address2);

    }


    /**
     * Mutator method for Address Line 2
     *
     * @param string employee address2 $newAddress2
     */
    public function setAddress2($newAddress2) {

        $newAddress2 = filter_var($newAddress2, FILTER_SANITIZE_STRING);

        if ( $newAddress2 === false) {
            throw (new InvalidArgumentException("New Address 2 is invalid"));
        }

        if (strlen($newAddress2) > 76) {
            throw (new RangeException ("Address2 content too large"));
        }
        $this->address2 = $newAddress2;
    }

    /**
     * Mutator method for city
     * @throws RangeException
     * @param string employee city $newCity
     */
    public function setCity($newCity) {
        $newCity = filter_var($newCity, FILTER_SANITIZE_STRING);

        if ( $newCity === false) {
            throw (new InvalidArgumentException("New City is Invalid"));
        }

        if (strlen($newCity) > 16) {
            throw (new RangeException ("City content too large"));
        }
        $this->city = $newCity;
    }


    /**
     * accessor method for email
     *
     * @return string of email for employee
     **/
    public function getEmail() {
        return ($this->email);
    }
    /**
     * Mutator method for Email
     *
     * @param string $newEmail of employee' email $newEmail
     * @throws InvalidArgumentException if email does not pass sanitization
     * @throws RangeException if email is longer than 64 characters
     **/
    public function setEmail($newEmail) {
        // verify email is valid
        $newEmail = filter_var($newEmail, FILTER_SANITIZE_EMAIL);
        if(empty($newEmail) === true) {
            throw new InvalidArgumentException ("user email invalid");
        }
        if(strlen($newEmail) > 64) {
            throw(new RangeException ("Email content too large"));
        }
        $this->email = $newEmail;
    }


    /**
     * accessor method for First Name
     *
     * @return string for first name
     **/
    public function getFirstName()
    {
        return ($this->firstName);
    }

    /**
     * Mutator method for First Name
     *
     * @param string $newFirstName for first name $newFirstName
     */
    public function setFirstName($newFirstName)
    {
        // verify first name is valid
        $newFirstName = filter_var($newFirstName, FILTER_SANITIZE_STRING);
        if (empty($newFirstName) === true) {
            throw new InvalidArgumentException("first name invalid");
        }
        if (strlen($newFirstName) > 32) {
            throw (new RangeException ("First Name content too large"));
        }
        $this->firstName = $newFirstName;
    }

    /**
     * accessor method for Hash
     * @return string of users password Hash
     **/
    public function getHash()
    {
        return ($this->hash);
    }

    /**
     * Mutator for Hash -insure it is 128 length string
     *
     * @param string $newHash of users $newHash
     * @throws InvalidArgumentException if newHash is not valid int
     * @throws RangeException if newHash is not exactly 128 xdigits
     **/
    public function setHash($newHash)
    {
        // verify Hash is exactly string of 128
        if ((ctype_xdigit($newHash)) === false) {
            if (empty($newHash) === true) {
                throw new InvalidArgumentException ("hash invalid");
            }
            if (strlen($newHash) !== 128) {
                throw new RangeException ("hash not valid");
            }
        }
        $this->hash = $newHash;
    }

    /**
     * accessor method for Last Name
     *
     * @return string for last name
     **/
    public function getLastName()
    {
        return ($this->lastName);
    }

    /**
     * Mutator method for last name sanitation
     *
     * @param string $newLastName for user last name $newLastName
     **/
    public function setLastName($newLastName)
    {
        //verify last name is valid
        $newLastName = filter_var($newLastName, FILTER_SANITIZE_STRING);
        if (empty($newLastName) === true) {
            throw new InvalidArgumentException("last name invalid");
        }
        if (strlen($newLastName) > 32) {
            throw (new RangeException("Last Name content too large"));
        }
        $this->lastName = $newLastName;
    }

    /**
     * Accessor method for Phone Number
     *
     * @return int for phone number
     **/
    public function getPhone()
    {
        return ($this->phone);
    }

    /**
     * Mutator method for Phone Number
     *
     * @param int $newPhone of user phone number $newPhoneNumber
     * @throws InvalidArgumentException if phoneNumber is not ctype digits
     * @throws RangeException if int is not 10 digits
     **/
    public function setPhone($newPhone)
    {
        //verify phone number is valid and digits only
        if ((ctype_digit($newPhone)) === false) {
            throw new InvalidArgumentException ("phoneNumber invalid");
        }
        if (strlen($newPhone) > 10) {
            throw (new RangeException ("Phone Number should be formatted 5055558787"));
        }
        $this->phone = $newPhone;
    }



    /**
     * accessor method for Salt
     *
     * @return string of Salt for user password
     **/
    public function getSalt()
    {
        return ($this->salt);
    }

    /**
     * mutator method for Salt
     *
     * @param string $newSalt of users password salt $newSalt
     * @throw InvalidArgumentException if salt is not valid int
     * @throw RangeException if salt is not exactly 64 xdigits
     **/
    public function setSalt($newSalt)
    {
        // verify salt is exactly string of 64
        if ((ctype_xdigit($newSalt)) === false) {
            if (empty($newSalt) === true) {
                throw new InvalidArgumentException ("salt invalid");
            }
            if (strlen($newSalt) !== 64) {
                throw (new RangeException ("salt not valid"));
            }
        }
        $this->salt = $newSalt;
    }


    public function getState()
    {
        return ($this->state);
    }

    public function setState($newState)
    {
        //verify profile path is valid
        $newState = filter_var($newState, FILTER_SANITIZE_STRING);
        if (empty($newState) === true) {
            throw new InvalidArgumentException("");
        }
        if (strlen($newState) > 255) {
            throw (new RangeException("State content too large "));
        }
        $this->state = $newState;
    }

    public function getStatus()
    {
        return ($this->status);
    }

    public function setStatus($newStatus)
    {
        //verify profile path is valid
        $newStatus = filter_var($newStatus, FILTER_SANITIZE_STRING);
        if (empty($newStatus) === true) {
            throw new InvalidArgumentException("");
        }
        if (strlen($newStatus) > 255) {
            throw (new RangeException("State content too large "));
        }
        $this->status = $newStatus;
    }




    public function getZip()
    {
        return ($this->getZip());
    }

    public function setZip($newZip)
    {
        //verify profile path is valid
        $newZip = filter_var($newZip, FILTER_SANITIZE_STRING);
        if (empty($newZip) === true) {
            throw new InvalidArgumentException("");
        }
        if (strlen($newZip) > 255) {
            throw (new RangeException("zip should be formatted 50555 55"));
        }
        $this->state = $newZip;
    }


    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        unset ($fields["salt"]);
        unset ($fields["hash"]);
        return ($fields);
    }

    /**
     * Inserts User into mySQL
     *
     * Inserts this userId into mySQL in intervals
     * @param PDO $pdo connection to
     **/
    public function insert(PDO &$pdo)
    {
        // make sure user doesn't already exist
        if ($this->employeeId !== null) {
            throw (new PDOException("existing employee"));
        }
        //create query template
        $query
            = "INSERT INTRO employee(employeeId, accessLevelId, address1, address2, city, email, firstName, hash, lastName, phone, salt, state, status, zip)
        VALUES (:employee, :accessLevel, :address1, :address2, :city, :email, :firstName, :hash, :lastName, :phone, :salt, :state, :status, :zip)";
        $statement = $pdo->prepare($query);

        // bind the variables to the place holders in the template
        $parameters = array("accessLevelId" => $this->accessLevelId,  "address1" => $this->address1,  "address2" => $this->address2, "city" => $this->city, "email" => $this->email,
            "firstName" => $this->firstName,
            "hash" => $this->hash, "lastName" => $this->lastName, "phone" => $this->phone,
            "salt" => $this->salt, "state" => $this->state, "status" => $this->status, "zip" => $this->zip);
        $statement->execute($parameters);
        //update null userId with what mySQL just gave us
        $this->employeeId = intval($pdo->lastInsertId ());

    }
    
    /**
     * Deletes Employee from mySQL
     *
     * Delete PDO to delete employeeId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo) {
        // enforce the user is not null
        if($this->employeeId === null) {
            throw(new PDOException("unable to delete a employee that does not exist"));
        }

        //create query template
        $query = "DELETE FROM employee WHERE employeeId = :employeeId";
        $statement = $pdo->prepare($query);

        //bind the member variables to the place holder in the template
        $parameters = array("employeeId" => $this->employeeId);
        $statement->execute($parameters);
    }

    /**
     * updates Employee in mySQL
     *
     * Update PDO to update employee class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo) {

        // create query template
        $query = "UPDATE employee SET employeeId = :employeeId, accessLevelId = :accessLevelId, address1 = :address1, address2 = :address2, email = :email,
        firstName = :firstName, hash = :hash, lastName = :lastName,
 		phone = :phone, salt = :salt, state = :state, status = :status, zip = :zip WHERE employeeId = :employeeId";
        $statement = $pdo->prepare($query);

        // bind the member variables
        $parameters = array("employeeId" => $this->employeeId, "accessLevel" => $this->accessLevelId, "address1" => $this->address1, "address2" => $this->address2, "city" => $this->city,"email" => $this->email,
            "firstName" => $this->firstName, "hash" => $this->hash, "lastName" => $this->lastName, "phone" => $this->phone,
            "salt" => $this->salt, "state" => $this->state,"status"=> $this->status, "zip" => $this->zip);
        
        $statement->execute($parameters);
    }

    /**
     * Get user by employeeId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int $employeeId for unique employeeId $employeeId
     * @return mixed|Employee
     **/
    public static function getEmployeeByEmployeeId(PDO $pdo, $employeeId) {
        // sanitize the userId before searching
        $employeeId = filter_var($employeeId, FILTER_VALIDATE_INT);
        if($employeeId === false) {
            throw(new PDOException("employee id is not an integer"));
        }
        if($employeeId <= 0) {
            throw(new PDOException("employee id is not positive"));
        }

        // create query template
        $query = "SELECT employeeId, accessLevelId, address1, address2, city, email, firstName, hash, lastName, phone
		,salt , state, status, zip FROM employee WHERE employeeId = :employeeId";
        $statement = $pdo->prepare($query);

        // bind the user id to the place holder in the template
        $parameters = array("employeeId" => $employeeId);
        $statement->execute($parameters);

        // grab the employee from mySQL
        try {
            $employee = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $employee = new Employee ($row["employeeId"], $row["accessLevelId"], $row["address1"], $row["address2"], $row["city"], $row["email"],
                    $row["firstName"], $row["hash"], $row["lastName"], $row["phone"],
                    $row["salt"], $row["state"], $row["status"], $row["zip"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($employee);
    }

    /**
     * get employee by email
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param mixed $email info for $employee
     * @return null|Employee
     **/
    public static function getEmployeeByEmail(PDO $pdo, $email) {
        // sanitize the email before searching
        $employee = filter_var($email, FILTER_SANITIZE_EMAIL);
        if($employee === false) {
            throw(new PDOException(""));
        }
        // create query template
        $query = "SELECT employeeId, accessLevelId, address1, address2, city, email, firstName, hash, lastName, phone, salt, state, status, zip
        FROM employee WHERE email = :email";
        $statement = $pdo->prepare($query);

        // bind the user id to the place holder in the template
        $parameters = array("email" => $email);
        $statement->execute($parameters);

        // grab the employee from mySQL
        try {
            $employee = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $employee = new Employee ($row["employeeId"], $row["accessLevelId"], $row["address1"], $row["address2"], $row["city"], $row["email"],
                    $row["firstName"], $row["hash"], $row["lastName"], $row["phone"], $row["salt"], $row["state"], $row["status"],$row["zip"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($employee);
    }

    public static function getAllEmployee(PDO $pdo) {
        //create the query template
        $query = "SELECT employeeId, accessLevelId, address1, address2, city, email, firstName, hash, lastName, phone, salt, state, status, zip FROM employee";
        $statement = $pdo->prepare($query);
        // execute
        $statement->execute();
        //call the function to build an array of the values
        $employee = null;
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $employees = new SplFixedArray($statement->rowCount());
        while(($row = $statement->fetch()) !== false) {
            try {
                if($row !== false) {
                    $employee = new Employee($row["employeeId"], $row["employeeName"], $row["employeeEmail"], $row["dateCreated"]);
                    $employees[$employees->key()] = $employee;
                    $employees->next();
                }
            } catch(Exception $exception) {

                throw(new PDOException($exception->getMessage(), 0, $exception));
            }
        }

        return $employees;
    }
    


} // end class