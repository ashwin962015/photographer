<?php
include('header.php')
?>

    <tr>
        <td>Address</td>
        <td>
            <form method="post" action="contactus.php">
                <table>
                    <tr>
                        <td>
                            <label>Full Name</label></br>
                            <input type="Text" name="txt Full Name"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Number</label></br>
                            <input type="Text" name="txt Contact Number"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Messages</label></br>
                            <textarea name="txt Messages" row="5" cols="60"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="Submit" name="BTN Submit" value="Submit"/>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
<?php
include('Footer.php')
?>