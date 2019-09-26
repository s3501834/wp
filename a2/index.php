<!-- HTML version specified in header -->
<?php 
    $title = "Index";
    include_once('includes/header.php');
?>
    <body>
        <?php
            include_once('includes/logo.php');
            include_once('includes/nav.html');
        ?>
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
                    <div class="col-sm-6">
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
                        <div class="col-sm-6">
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
                                    <td><button type="button" class="btn-xs btn-dark">Wed: 9:00pm - 12:30am</button></td>
                                    <td><button type="button" class="btn-xs btn-dark">Thu: 9:00pm - 12:30am</button></td>
                                    <td><button type="button" class="btn-xs btn-dark">Fri: 9:00pm - 12:30am</button></td>
                                    <td><button type="button" class="btn-xs btn-dark">Sat: 6:00pm - 9:30pm</button></td>
                                    <td><button type="button" class="btn-xs btn-dark">Sun: 6:00pm - 9:30pm</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <div class="section-seperator"></div>
                <section id="bookings">
                    <div class="bookings-panel">
                        <a name="bookings"><h1>Bookings</h1></a>
                        <br/><br/>
                        <h2>Under construction</h2>
                    </div>
                </div>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>