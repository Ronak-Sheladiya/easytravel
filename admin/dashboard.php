<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin EasyTravels</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Borel&family=Montserrat:wght@500&display=swap');

        /* navbar */
        .main_nav {
            grid-column-start: 1;
            grid-column-end: 13;
            /* height: 10vh; */
            background-color: rgba(240, 248, 255, 0.441);
            align-items: center;
        }

        .logotitle a {
            height: 100%;
            width: 41vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            fill: white;
            font-size: 25px;
            font-family: 'Borel', cursive;
        }

        .logotitle {
            margin-left: 10px;

        }

        .nav-link {
            font-size: 20px;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .btn-outline-success {
            color: white;
            border-color: white;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <div class="sec_container">


            <!-- navigation bar -->


            <div class="main_nav">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <nav class="navbar ">
                            <div class="container-fluid logotitle">
                                <a class="navbar-brand nav-link " href="Index.html">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-inline-block align-text-top" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="50" height="50">
                                        <path d="M24,13.5A2.5,2.5,0,0,1,21.5,16H17.464l-4.226,6.487A2.973,2.973,0,0,1,10.633,24a2.629,2.629,0,0,1-2.462-3.553L10.019,16H6a4,4,0,0,1-3.473-2.015L.2,10.16a1.443,1.443,0,0,1,.525-2,1.412,1.412,0,0,1,1.652.25L3.794,9.828A4,4,0,0,0,6.622,11H21.5A2.5,2.5,0,0,1,24,13.5ZM17.731,9l-4.5-7.487A2.972,2.972,0,0,0,10.629,0,2.63,2.63,0,0,0,8.167,3.553L10.285,9Z" />
                                    </svg>
                                    <div class="logotitle">EasyTravels</div>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="html/inquiry.html">Travel Inquiry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutus">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Contactus">Contact</a>
                                </li>

                            </ul>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>



                </nav>
            </div>

            <!-- section: 2 -->
            
            <div class="section_sec">
                <div class="user_data">
                    <table class="data_table">
                        <th colspan="13">Travell Inquiry</th>
                        <tr class="main_tr">
                            <td>Name</td>
                            <td>Age</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>Country</td>
                            <td>City</td>
                            <td>Destination</td>
                            <td>Budget</td>
                            <td>No. of Travellers</td>
                            <td>Date of Travel: </td>
                            <td>End Date of Travel: </td>
                            <td>What kind of traveller are you?</td>
                        </tr>
                        <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "admindb";

            //create connection
            $conn = mysqli_connect($server, $username, $password, $database, 3308);
            $query = "SELECT * FROM inquirytra";
if ($result = $conn->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $field1name = $row["name"];
                                $field2name = $row["age"];
                                $field3name = $row["email"];
                                $field4name = $row["phone"];
                                $field5name = $row["address"];
                                $field6name = $row["country"];
                                $field7name = $row["city"];
                                $field8name = $row["destination"];
                                $field9name = $row["budget"];
                                $field10name = $row["travellers"];
                                $field11name = $row["sdate"];
                                $field12name = $row["edate"];
                                $field13name = $row["kind"];



                                echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
                  <td>' . $field5name . '</td> 
                  <td>' . $field6name . '</td> 
                  <td>' . $field7name . '</td> 
                  <td>' . $field8name . '</td>
                  <td>' . $field9name . '</td> 
                  <td>' . $field10name . '</td> 
                  <td>' . $field11name . '</td> 
                  <td>' . $field12name . '</td> 
                  <td>' . $field13name . '</td> 

              </tr>';
                            }
                            $result->free();
                        }
                        ?>
                        <tr></tr>
                    </table>
                </div>
            </div>



        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>