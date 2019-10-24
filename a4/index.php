<!-- HTML version specified in header -->
<?php 
    ob_start();
    $title = "Index";
    include_once('includes/header.php');
    include_once('tools.php')
?>
    <body>
        <?php
            include_once('includes/logo.php');
            include_once('includes/nav.html');
        ?>
        <script src="script.js"></script>
        <div class="parallax">
            <main>
                <div class="nav-seperator"></div>
                <section id="about-us">
                    <a name="about"><h1 color="#FFFFFF">About Us</h1></a>
                    <br/>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                            <h3>Grand Re-Opening</h3>
                            <p>The Lunardo Cinema has a just made a 
                                grand come back for its re-opening! After
                                long and hardworking hours for months on end, we have
                                extensively improved and renovated almost every
                                feature that we offer!</p>
                            <h3>What we do</h3>
                            <p>
                                We pride ourselves on our employment experience,
                                giving many young people the launching pad for
                                their career with ongoing and development opportunities
                                in communication, customer service and team leadership.
                                Nearly all of our Lunardo Cinema Manager are promoted 
                                from our Crew.
                                <br/>
                                Our Crew members learn what they need to do on the job 
                                and in turn, they become the future leaders of our
                                company. It's on-the-job training like you have never had before.
                                <br/>
                                We know that it's our people that set us aparrt from our
                                competitors to create and deliver the Experience More promise.
                                It's the people that make a real difference for our customers
                                and clients.
                            </p>
                            </div>
                            <div class="col-lg-6">
                                <img src="media/about-us-room.jpg" class="img-thumbnail" alt="New Cinema" width=500px height=343px/>
                            </div>
                        </div>
                </section>
                <div class="section-seperator"></div>
                <section id="pricing">
                    <a name="pricing"><h1 style="color: #51585E;">Seats Pricing</h1></a>
                    <br/><br/><br/><br/>
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                <th>Seat Type</th>
                                <th>Seat Code</th>
                                <th>Discount Times</th>
                                <th>All other times</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Standard Adult</td>
                                <td>STA</td>
                                <td>$14.00</td>
                                <td>$19.80</td>
                            </tr>
                            <tr>
                                <td>Standard Concession</td>
                                <td>STP</td>
                                <td>$12.50</td>
                                <td>$17.50</td>
                            </tr>
                            <tr>
                                <td>Standard Child</td>
                                <td>STC</td>
                                <td>$11.00</td>
                                <td>$15.30</td>
                            </tr>
                            <tr>
                                <td>First Class Adult</td>
                                <td>FCA</td>
                                <td>$24.00</td>
                                <td>$30.00</td>
                            </tr>
                            <tr>
                                <td>First Class Concession</td>
                                <td>FCP</td>
                                <td>$22.50</td>
                                <td>$27.00</td>
                            </tr>
                            <tr>
                                <td>First Class Child</td>
                                <td>FCC</td>
                                <td>$21.00</td>
                                <td>$24.00</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <div class="section-seperator"></div>
                <section class="now-showing">
                    <a name="now-showing"><h1 style="color: #FFFFFF;">Now Showing</h1></a>
                    <div class="row">
                        <div class="col-1">
                            <button onclick="alert('Updated Synopsis');updateEndgame();" href="#synopsis">Endgame</button>
                            <div class="movie-panel">
                                <div class="movie-poster">
                                    <img src="media/movie-poster-avengers.jpg"/>
                                </div>
                                <div class="movie-title">
                                    Avengers: Endgame (M)
                                    <br/><br/>
                                </div>
                                <div class="movie-times">
                                    Mon: --:--<br/>
                                    Tue: --:--<br/>
                                    Wed: 9:00pm - 12:30am<br/>
                                    Thu: 9:00pm - 12:30am<br/>
                                    Fri: 9:00pm - 12:30am<br/>
                                    Sat: 6:00pm - 9:30pm<br/>
                                    Sun: 6:00pm - 9:30pm<br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <button onclick="alert('Updated Synopsis');updateWedding();" href="#synopsis">Wedding</button>
                            <div class="movie-panel">
                                <div class="movie-poster">
                                    <img src="media/movie-poster-wedding.jpg"/>
                                </div>
                                <div class="movie-title">
                                    Top Ending Wedding (MA)
                                    <br/><br/>
                                </div>
                                <div class="movie-times">
                                    Mon: 6:00pm - 8:15pm<br/>
                                    Tue: 6:00pm - 8:15pm<br/>
                                    Wed: --:--<br/>
                                    Thu: --:--<br/>
                                    Fri: --:--<br/>
                                    Sat: 3:00pm - 5:15pm<br/>
                                    Sun: 3:00pm - 5:15pm<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <button onclick="alert('Updated Synopsis');updateDumbo();" href="#synopsis">Dumbo</button>
                            <div class="movie-panel">
                                <div class="movie-poster">
                                    <img src="media/movie-poster-dumbo.jpg"/>
                                </div>
                                <div class="movie-title">
                                    Dumbo The Elephant (G)
                                    <br/><br/>
                                </div>
                                <div class="movie-times">
                                    Mon: 12:00pm - 1:45pm<br/>
                                    Tue: 12:00pm - 1:45pm<br/>
                                    Wed: 6:00pm - 7:45pm<br/>
                                    Thu: 6:00pm - 7:45pm<br/>
                                    Fri: 6:00pm - 7:45pm<br/>
                                    Sat: 12:00pm - 1:45pm<br/>
                                    Sun: 12:00pm - 1:45pm<br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <button onclick="alert('Updated Synopsis');updatePrince();" href="#synopsis">Prince</button>
                            <div class="movie-panel">
                                <div class="movie-poster">
                                    <img src="media/movie-poster-prince.jpg"/>
                                </div>
                                <div class="movie-title">
                                    The Happy Prince (R)
                                    <br/><br/>
                                </div>
                                <div class="movie-times">
                                    Mon: --:--<br/>
                                    Tue: --:--<br/>
                                    Wed: 12:00pm - 2:30am<br/>
                                    Thu: 12:00pm - 2:30am<br/>
                                    Fri: 12:00pm - 2:30am<br/>
                                    Sat: 9:00pm - 11:30pm<br/>
                                    Sun: 9:00pm - 11:30pm<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-seperator"></div>
                <section id="synopsis">
                    <div class="synopsis-panel">
                        <div class="synopsis-title">
                            <a name="synopsis"><h2>Avengers: Endgame (M)</h2></a>
                        </div>
                        <div class="synopsis-description">
                            Twenty-three days after Thanos used the<br/>
                            Infinity Gauntlet to disintegrate half of all<br/>
                            life in the universe, Carol Danvers rescues Tony<br/>
                            Strak and Nebula from deep space and returns them<br/>
                            to Earth, where they reunite with the remaining<br/>
                            avengers.<br/>
                        </div>
                        <div class="synopsis-trailer">
                            <video width="400" controls>
                                <source src="media/avengers-trailer.mp4">
                            </video>
                        </div>
                        <div class="synopsis-booking">
                        <h2>Make a booking</h2>
                        </div>
                        <div class="synopsis-booking-buttons">
                            <table>
                                <tr>
                                    <td><button type="button" class="btn-xs btn-dark">Mon: --:--</button></td>
                                    <td><button type="button" class="btn-xs btn-dark">Tue: --:--</button></td>
                                    <td><button onclick="updateBooking('Avengers: Endgame', 'WED', '9:00pm - 12:30am');" type="button" class="btn-xs btn-dark">Wed: 9:00pm - 12:30am</button></td>
                                    <td><button onclick="updateBooking('Avengers: Endgame', 'THU', '9:00pm - 12:30am');" type="button" class="btn-xs btn-dark">Thu: 9:00pm - 12:30am</button></td>
                                    <td><button onclick="updateBooking('Avengers: Endgame', 'FRI', '9:00pm - 12:30am');" type="button" class="btn-xs btn-dark">Fri: 9:00pm - 12:30am</button></td>
                                    <td><button onclick="updateBooking('Avengers: Endgame', 'SAT', '6:00pm - 9:30pm');" type="button" class="btn-xs btn-dark">Sat: 6:00pm - 9:30pm</button></td>
                                    <td><button onclick="updateBooking('Avengers: Endgame', 'SUN', '6:00pm - 9:30pm');" type="button" class="btn-xs btn-dark">Sun: 6:00pm - 9:30pm</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <div class="section-seperator"></div>
                <section id="bookings">
                    <div align="center" class="bookings-panel">
                        <a name="bookings"><h1>Bookings</h1></a>
                        <form name="form-movie" action="index.php" method="POST">
                            <div class="form-movie-panel">
                                <div class="form-movie-title">
                                    <input name="movie[id]" id="movie-id" type="hidden">Avengers: Endgame</input><br/>
                                    <input name="movie[day]" id="movie-day" type="hidden">WED</input><br/>
                                    <input name="movie[hour]" id="movie-hour" type="hidden">9:00pm - 12:30am</input><br/>
                                </div>
                                <div class="form-standard-box">
                                    <h3>Standard</h3>
                                    <label for="seats-STA">Adults</label>
                                    <select name="seats[STA]" id="seats-STA" onchange="updatePrice();">
                                        <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    </br>
                                    <label for="seats-STP">Concession</label>
                                    <select name="seats[STP]" id="seats-STP" onchange="updatePrice();">
                                        <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    </br>
                                    <label for="seats-STC">Children</label>
                                    <select name="seats[STC]" id="seats-STC" onchange="updatePrice();">
                                        <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="form-firstclass-box">
                                    <h3>First Class</h3>
                                    <label for="seats-FCA">Adults</label>
                                    <select name="seats[FCA]" id="seats-FCA" onchange="updatePrice();">
                                        <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    </br>
                                    <label for="seats-FCP">Concession</label>
                                    <select name="seats[FCP]" id="seats-FCP" onchange="updatePrice();">
                                        <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    </br>
                                    <label for="seats-FCC">Children</label>
                                    <select name="seats[FCC]" id="seats-FCC" onchange="updatePrice();">
                                    <option option hidden disabled selected value>Please Select</option>
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="form-customer-box">
                                    <h3>Customer Details</h3>
                                    <label for="cust-name">Name</label>
                                    <input name="cust[name]" id="cust-name" type="text"><br/>
                                    <label for="cust-email">Email</label>
                                    <input name="cust[email]" id="cust-email" type="email"><br/>
                                    <label for="cust-mobile">Mobile</label>
                                    <input name="cust[mobile]" id="cust-mobile" type="tel"><br/>
                                    <label for="cust-card">Credit Card</label>
                                    <input minlength="14" maxlength="19"name="cust[card]" id="cust-card" type="text"><br/>
                                    <label for="cust-expiry">Expiry</label>
                                    <input name="cust[expiry]" id="cust-expiry" type="month"><br/>
                                </div>
                                <div class="form-order-total">
                                    <input name="order[total]" id="order-total" readonly>
                                </div>
                                <div class="form-order-button">
                                    <input type="submit" name="submit-order" value="Order">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    
                    // Booking form validation
                    if (isset($_POST['submit-order'])) {
                            
                        if (isset($_POST['seats'])) {
                            $seats = $_POST['seats'];
                            if (isset($seats['STA']) || isset($seats['STP']) || isset($seats['STC']) || isset($seats['FCA']) || isset($seats['FCP']) || isset($seats['FCC'])) {
                                $sta = $seats['STA'];
                                $stp = $seats['STP'];
                                $stc = $seats['STC'];
                                $fca = $seats['FCA'];
                                $fcp = $seats['FCP'];
                                $fcc = $seats['FCC'];
                            }
                        }

                        // Verify all customer fields are set
                        if (isset($_POST['cust'])) {
                            $cust = $_POST['cust'];
                            $allFilled = False;
                            if (empty($cust['name'])) {
                                alert("Fill in customer name field");
                                $allFilled = False;
                            } else if (empty($cust['email'])) {
                                alert("Fill in email field");
                                $allFilled = False;
                            } else if (empty($cust['mobile'])) {
                                alert("Fill in mobile field");
                                $allFilled = False;
                            } else if (empty($cust['card'])) {
                                alert("Fill in card field");
                                $allFilled = False;
                            } else if (empty($cust['expiry'])) {
                                alert("Fill in expiry date field");
                                $allFilled = False;
                            } else {
                                $allFilled = True;
                            }

                            if ($allFilled) {

                                // Verify if exp date is within aa month
                                $expDate = $cust['expiry'];
                                $currDate = date('Y-m');

                                $ts1 = strtotime($expDate);
                                $ts2 = strtotime($currDate);

                                $year1 = date('Y', $ts1);
                                $year2 = date('Y', $ts2);

                                $month1 = date('m', $ts1);
                                $month2 = date('m', $ts2);

                                $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

                                if ($diff <= 1) {
                                    alert('The expiry date of the card cannot be within a month!');
                                }

                                $validBookings = array(
                                    "$currDate\t".$cust['name']."\t".$cust['email']."\t".$cust['mobile']
                                    ."\t"."$sta\t$stp\t$stc\t$fca\t$fcp\t$fcc\t".$_POST['order']['total']
                                );

                                // opening the file "BOOKINGS.csv" for appending 
                                $myfile = fopen("bookings.txt", "a");
                                
                                // formatting each row of data in CSV format  
                                // and outputting it 
                                foreach ($validBookings as $line) 
                                { 
                                    fputcsv($myfile, explode('\t',$line)); 
                                } 
                                
                                // closing the file 
                                fclose($myfile);  

                                // // If session empty redirect to index
                                // if (empty($_SESSION)) {
                                //     header("Location:index.php");
                                // }
                                
                                $gstPercentage = 9;
                                $orderTtl = $_POST['order']['total'];
                                $gstTotal = ($percentage / 100) * $orderTtl;

                                // Display receipt should be working but outputs undefined variable
                                // but it is defined
                                echo '<div id="receipt">';
                                echo '<h1>Tax Invoice</h1>';
                                echo 'Lunardo | ABN number: 00 123 456 789<br/>';
                                echo '<hr>';
                                echo '<b>Movie Details</b><br/>';
                                echo 'Movie ID: '.$_POST['movie']['id'].'<br/>';
                                echo 'Movie Day: '.$_POST['movie']['day'].'<br/>';
                                echo 'Movie Hour: '.$_POST['movie']['hour'].'<br/>';
                                echo '<hr>';
                                echo '<b>Customer Details</b><br/>';
                                echo 'GST: '.$gstPercentage.'%<br/>';
                                echo 'Sub-Total : $'.number_format((float)$orderTtl, 2, '.', '').'<br/>';
                                echo '<br/>Total: $'.number_format((float)($orderTtl+$gstTotal), 2, '.', '').'<br/>';
                                echo '</div>';
                            
                            }
                        }
                    }

                ?>
                <div class="section-seperator"></div>
                <div class="section-seperator"></div>
                <button onclick="debug();">Toggle Debug Mode</button>
                <div id="debug-module">
                    <h1 style="color:#ffffff">Debug</h1>
                    <?php 

                        preShow($_POST);
                        preShow($_SESSION);

                        echo "<b style='color:#fffffff'>Code:<br/></b>";
                        printMyCode(); 
                    ?>
                </div>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>