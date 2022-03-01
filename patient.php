<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="./patient.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway:wght@800&display=swap" rel="stylesheet">
</head>

<body>

    <div class="flex">

        <form action="" method="post" class="registerForm">

            <h2>Register Patient</h2>

            <br>

            <div class="ip">
                <label for="patient">Patient ID: </label>
                <input type="text" name="patient" id="patient">
            </div>

            <br>

            <div class="ip">
                <label for="fname">First Name: </label>
                <input type="text" name="fname" id="fname">
            </div>

            <br>

            <div class="ip">
                <label for="mid_name">First Name: </label>
                <input type="text" name="mname" id="mid_name" required>
            </div>

            <br>

            <div class="ip">
                <label for="sir_name">Middle Name: </label>
                <input type="text" name="sname" id="sir_name" required>
            </div>

            <br>

            <div class="ip">
                <label for="do_birth">Date of Birth: </label>
                <input type="date" name="dateofb" id="do_birth" value="mm/dd/yyy" required>
            </div>

            <br>

            <div class="ip">
                <label for=" gender_id">Gender: </label>
                <select class="form-control" name="gender" id="gender_id" required>
                    <option value="">Select...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="Bi-sexual">Bi-sexual</option>
                </select>
            </div>

            <br>

            <div class="ip">
                <label for="county_id">County of Residence</label>
                <select class="form-control" name="county_id" id="county_id">
                    <option value="">Select...</option>
                    <option value='Baringo'>Baringo</option>
                    <option value='Bomet'>Bomet</option>
                    <option value='Bungoma'>Bungoma</option>
                    <option value='Busia'>Busia</option>
                    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                    <option value='Embu'>Embu</option>
                    <option value='Garissa'>Garissa</option>
                    <option value='Homa Bay'>Homa Bay</option>
                    <option value='Isiolo'>Isiolo</option>
                    <option value='Kajiado'>Kajiado</option>
                    <option value='Kakamega'>Kakamega</option>
                    <option value='Kericho'>Kericho</option>
                    <option value='Kiambu'>Kiambu</option>
                    <option value='Kilifi'>Kilifi</option>
                    <option value='Kirinyaga'>Kirinyaga</option>
                    <option value='Kisii'>Kisii</option>
                    <option value='Kisumu'>Kisumu</option>
                    <option value='Kitui'>Kitui</option>
                    <option value='Kwale'>Kwale</option>
                    <option value='Laikipia'>Laikipia</option>
                    <option value='Lamu'>Lamu</option>
                    <option value='Machakos'>Machakos</option>
                    <option value='Makueni'>Makueni</option>
                    <option value='Mandera'>Mandera</option>
                    <option value='Marsabit'>Marsabit</option>
                    <option value='Meru'>Meru</option>
                    <option value='Migori'>Migori</option>
                    <option value='Mombasa'>Mombasa</option>
                    <option value='Murang' a'>Murang'a</option>
                    <option value='Nairobi City'>Nairobi City</option>
                    <option value='Nakuru'>Nakuru</option>
                    <option value='Nandi'>Nandi</option>
                    <option value='Narok'>Narok</option>
                    <option value='Nyamira'>Nyamira</option>
                    <option value='Nyandarua'>Nyandarua</option>
                    <option value='Nyeri'>Nyeri</option>
                    <option value='Samburu'>Samburu</option>
                    <option value='Siaya'>Siaya</option>
                    <option value='Taita-Taveta'>Taita-Taveta</option>
                    <option value='Tana River'>Tana River</option>
                    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                    <option value='Trans Nzoia'>Trans Nzoia</option>
                    <option value='Turkana'>Turkana</option>
                    <option value='Uasin Gishu'>Uasin Gishu</option>
                    <option value='Vihiga'>Vihiga</option>
                    <option value='West Pokot'>West Pokot</option>
                    <option value='wajir'>wajir</option>
                </select>
            </div>

            <br>

            <div class="bt">
                <input class="action1" type="submit" value="Send">
                <input class="action2" type="submit" value="Clear">
            </div>

        </form>
    </div>

</body>

</html>