<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head-utils.php"); ?>
    
    <title>Admin</title>
    
</head>
    <body>

        <div class="container-fluid display-table">
                <div class="col-md-10">
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address 1</th>
                                    <th>Address 2</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Krieg</td>
                                    <td>Benally</td>
                                    <td>3751 Red Maple Road</td>
                                    <td></td>
                                    <td>Salt Lake City</td>
                                    <td>UT</td>
                                    <td>84107</td>
                                    <td>4356722236</td>
                                    <td>Full Time</td>
                                    <td>kriegbenally@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Marty</td>
                                    <td>Buck</td>
                                    <td>42 Wallaby Way</td>
                                    <td></td>
                                    <td>Farmington</td>
                                    <td>NM</td>
                                    <td>55555</td>
                                    <td>5055554633</td>
                                    <td>Part Time</td>
                                    <td>marty@marty.com</td>
                                </tr>
                                <tr>
                                    <<th scope="row">3</th>
                                    <td>Ryan</td>
                                    <td>Sam</td>
                                    <td>5 miles east mile marker 420</td>
                                    <td>APT 202</td>
                                    <td>Farmington</td>
                                    <td>NM</td>
                                    <td>55555</td>
                                    <td>50555554633</td>
                                    <td>PRN</td>
                                    <td>ryan@snapchat.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Aarick</td>
                                    <td>Lameman</td>
                                    <td>3245 S 700 E</td>
                                    <td>#507</td>
                                    <td>Bluff</td>
                                    <td>UT</td>
                                    <td>84512</td>
                                    <td>4355556789</td>
                                    <td>Terminated</td>
                                    <td>aarick@aarick.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Jeremiah</td>
                                    <td>Johnson</td>
                                    <td>3665 South Highland Drive</td>
                                    <td></td>
                                    <td>Salt Lake </td>
                                    <td>UT</td>
                                    <td>84107</td>
                                    <td>4355552233</td>
                                    <td>Full Time</td>
                                    <td>jeremiah@jeremiah.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>marieta</td>
                                    <td>buck</td>
                                    <td>pop box 2073</td>
                                    <td></td>
                                    <td>Window Rock</td>
                                    <td>AZ</td>
                                    <td>86515</td>
                                    <td>9287971419</td>
                                    <td>Full Time</td>
                                    <td>marietab1@gmail.com</td>
                                </tr>
                            </tbody>


                            <div class="wrap">
                                <!--    --><?php //screen_icon(); ?>
                                <h2 id="add-new-user"> Add New Staff Member</h2>
                                ​
                                <div id="ajax-response"></div>
                                ​
                                <p>Create a new staff member for this site.</p>
                                <form action="" method="post" name="createuser" id="createuser" class="validate">
                                    <input name="action" type="hidden" value="createuser" />
                                    <input type="hidden" id="_wpnonce_create-user" name="_wpnonce_create-user" value="5ebe2973f8" /><input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/user-new.php" /><table class="form-table">
                                        <tr class="form-field form-required">
                                            <th scope="row"><label for="user_login">Username <span class="description">(required)</span></label></th>
                                            <td><input name="user_login" type="text" id="user_login" value="" aria-required="true" /></td>
                                        </tr>
                                        <tr class="form-field form-required">
                                            <th scope="row"><label for="email">E-mail <span class="description">(required)</span></label></th>
                                            <td><input name="email" type="text" id="email" value="" /></td>
                                        </tr>
                                        <tr class="form-field">
                                            <th scope="row"><label for="first_name">First Name </label></th>
                                            <td><input name="first_name" type="text" id="first_name" value="" /></td>
                                        </tr>
                                        <tr class="form-field">
                                            <th scope="row"><label for="last_name">Last Name </label></th>
                                            <td><input name="last_name" type="text" id="last_name" value="" /></td>
                                        </tr>
                                        <tr class="form-field form-required">
                                            <th scope="row"><label for="pass1">Password <span class="description">(required)</span></label></th>
                                            <td>
                                                <input class="hidden" value=" " /><!-- #24364 workaround -->
                                                <input name="pass1" type="password" id="pass1" autocomplete="off" />
                                            </td>
                                        </tr>
                                        <tr class="form-field form-required">
                                            <th scope="row"><label for="pass2">Repeat Password <span class="description">(required)</span></label></th>
                                            <td>
                                                <input name="pass2" type="password" id="pass2" autocomplete="off" />
                                                <br />
                                                <div id="pass-strength-result">Strength indicator</div>
                                                <p class="description indicator-hint">Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers and symbols like ! " ? $ % ^ &amp; ).</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><label for="send_password">Send Password?</label></th>
                                            <td><label for="send_password"><input type="checkbox" name="send_password" id="send_password"  /> Send this password to the new user by email.</label></td>
                                        </tr>
                                        <tr class="form-field">
                                            <th scope="row"><label for="role">Staff Type</label></th>
                                            <td><select name="role" id="role">
                                                    ​
                                                    <option value='employee'>Employee</option>
                                                    <option value='contractor'>Contractor</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    ​
                                    ​
                                    <p class="submit"><input type="submit" name="createuser" id="createusersub" class="button button-primary" value="Add New Staff Member "  /></p>
                                </form>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>