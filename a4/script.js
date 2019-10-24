function debug() {
    var x = document.getElementById("debug-module");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function validateForm() {
    var fieldId = document.forms["form-movie"]["movie[id]"].value;
    var legalIds = ["ACT", "AHF", "ANM", "RMC"];
    for (i = 0; i < legalIds.length; i++) {
        if (fieldId != legalIds[i]) {
            alert("Illegal value for Movie ID, must be: ACT, AHF, ANM, RMC");
            return false;
        }
    }
}

function updatePrice() {
    var form = document.forms["form-movie"]

    // Other times
    var staPrice = 19.80;
    var stpPrice = 17.50;
    var stcPrice = 15.30;
    var fcaPrice = 30.00;
    var fcpPrice = 27.00;
    var fccPrice = 24.00;

    // Discount times
    var staDiscPrice = 14.00;
    var stpDiscPrice = 12.50;
    var stcDiscPrice = 11.00;
    var fcaDiscPrice = 24.00;
    var fcpDiscPrice = 22.50;
    var fccDiscPrice = 21.00;

    var staVal = form["seats[STA]"].value;
    var stpVal = form["seats[STP]"].value;
    var stcVal = form["seats[STC]"].value;
    var fcaVal = form["seats[FCA]"].value;
    var fcpVal = form["seats[FCP]"].value;
    var fccVal = form["seats[FCC]"].value;

    // Check at 12pm on weekdays
    // If not weekend normal price
    var staTotal = staPrice * staVal;
    var stpTotal = stpPrice * stpVal;
    var stcTotal = stcPrice * stcVal;
    var fcaTotal = fcaPrice * fcaVal;
    var fcpTotal = fcpPrice * fcpVal;
    var fccTotal = fccPrice * fccVal;
    var total = staTotal + stpTotal + stcTotal + fcaTotal + fcpTotal + fccTotal;
    // else paply discount at 12pm weekdays

    document.getElementById("order-total").value = "Total $" + total.toFixed(2);
}

function updateBooking(title, day, hour) {
    var formMovieTitle = document.getElementsByClassName('form-movie-title')[0];
    formMovieTitle.innerHTML = '<input name="movie[id]" type="hidden">' + title + '</input><br/>'
                            + '<input name="movie[day]" type="hidden">' + day + '</input><br/>'
                            + '<input name="movie[hour]" type="hidden">' + hour +'</input><br/>';
}

// After research, event listeners aren't functioning in innerHTML

function updateEndgame() {
    var synopsis = document.getElementsByName('synopsis')[0];
    synopsis.innerHTML = '<h2>Avengers: Endgame (M)</h2>';

    var synopsisDesc = document.getElementsByClassName('synopsis-description')[0];
    synopsisDesc.innerHTML = "Twenty-three days after Thanos used the<br/>" 
                    + "Infinity Gauntlet to disintegrate half of a,,<br/>"
                    + "life in the Universe, Carol Danvers rescues Tony Stark<br/>" 
                    + "and Nebula from deep space and returns them to Earth<br/>"
                    + "they reunite with the remaining avengers.";

    var synopsisTrailer = document.getElementsByClassName('synopsis-trailer')[0];
    synopsisTrailer.innerHTML = "<video width='400' controls> <source src='media/avengers-trailer.mp4'> </video>";

    var synopsisButtons = document.getElementsByClassName('synopsis-booking-buttons')[0];
        "<td><button type='button' class='btn-xs btn-dark'>Mon: --:--</button></td>"+
        "<td><button type='button' class='btn-xs btn-dark'>Tue: --:--</button></td>"+
        "<td><button onclick='updateBooking('Avengers: Endgame', 'WED', '9:00pm - 12:30am');' type='button' class='btn-xs btn-dark'>Wed: 9:00pm - 12:30am</button></td>"+
        "<td><button onclick='updateBooking('Avengers: Endgame', 'THU', '9:00pm - 12:30am');' type='button' class='btn-xs btn-dark'>Thu: 9:00pm - 12:30am</button></td>"+
        "<td><button onclick='updateBooking('Avengers: Endgame', 'FRI', '9:00pm - 12:30am');' type='button' class='btn-xs btn-dark'>Fri: 9:00pm - 12:30am</button></td>"+
        "<td><button onclick='updateBooking('Avengers: Endgame', 'SAT', '6:00pm - 9:30pm');' type='button' class='btn-xs btn-dark'>Sat: 6:00pm - 9:30pm</button></td>"+
        "<td><button onclick='updateBooking('Avengers: Endgame', 'SAT', '6:00pm - 9:30pm');' type='button' class='btn-xs btn-dark'>Sun: 6:00pm - 9:30pm</button></td>"+
        "</tr> </table>";
}

// FIX THE UPDATE BOOKING FUNCTION

function updateWedding() {
    var synopsis = document.getElementsByName('synopsis')[0];
    synopsis.innerHTML = '<h2>Top Ending Wedding (MA)</h2>';

    var synopsisDesc = document.getElementsByClassName('synopsis-description')[0];
    synopsisDesc.innerHTML = "Lauren and Ned are engaged, they are in love<br/>" 
                    + "and they have just ten days to find Lauren's mother<br/>"
                    + "who has gone AWOL somewhere in the remote far north<br/>" 
                    + "of Australia, reunite her parents and pull off their dream wedding.";

    var synopsisTrailer = document.getElementsByClassName('synopsis-trailer')[0];
    synopsisTrailer.innerHTML = "<video width='400' controls> <source src='media/wedding-trailer.mp4'> </video>";

    var synopsisButtons = document.getElementsByClassName('synopsis-booking-buttons')[0];
    synopsisButtons.innerHTML = "<table><tr>"+
        "<td><button onclick='updateBooking('Top Ending Wedding', 'MON', '6:00pm - 8:15pm');' type='button' class='btn-xs btn-dark'>Mon: 6:00pm - 8:15pm</button></td>"+
        "<td><button onclick='updateBooking('Top Ending Wedding', 'TUE', '6:00pm - 8:15pm');' type='button' class='btn-xs btn-dark'>Tue: 6:00pm - 8:15pm</button></td>"+
        "<td><button type='button' class='btn-xs btn-dark'>Wed: --:--</button></td>"+
        "<td><button type='button' class='btn-xs btn-dark'>Thu: --:--</button></td>"+
        "<td><button type='button' class='btn-xs btn-dark'>Fri: --:--</button></td>"+
        "<td><button onclick='updateBooking('Top Ending Wedding', 'SAT', '3:00pm - 5:15pm');' type='button' class='btn-xs btn-dark'>Sat: 3:00pm - 5:15pm</button></td>"+
        "<td><button onclick='updateBooking('Top Ending Wedding', 'SUN', '3:00pm - 5:15pm');' type='button' class='btn-xs btn-dark'>Sun: 3:00pm - 5:15pm</button></td>"+
        "</tr> </table>";
}

function updateDumbo() {
    var synopsis = document.getElementsByName('synopsis')[0];
    synopsis.innerHTML = '<h2>Dumbo The Elephant (G)</h2>';

    var synopsisDesc = document.getElementsByClassName('synopsis-description')[0];
    synopsisDesc.innerHTML = "A young elephant, whose oversized ears<br/>" 
                    + "enable him to fly, helps save a struggling circus, but<br/>"
                    + "when the circus plans a new venture, Dumbo and his friends<br/>" 
                    + "discover dark secrets beneath its shiny veneer.";

    var synopsisTrailer = document.getElementsByClassName('synopsis-trailer')[0];
    synopsisTrailer.innerHTML = "<video width='400' controls> <source src='media/dumbo-trailer.mp4'> </video>";

    var synopsisButtons = document.getElementsByClassName('synopsis-booking-buttons')[0];
    synopsisButtons.innerHTML = "<table><tr>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'MON', '12:00pm - 1:45pm');' type='button' class='btn-xs btn-dark'>Mon: 12:00pm - 1:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'TUE', '12:00pm - 1:45pm');'type='button' class='btn-xs btn-dark'>Tue: 12:00pm - 1:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'WED', '6:00pm - 7:45pm');' type='button' class='btn-xs btn-dark'>Wed: 6:00pm - 7:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'THU', '6:00pm - 7:45pm');' type='button' class='btn-xs btn-dark'>Thu: 6:00pm - 7:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'FRI', '6:00pm - 7:45pm');' type='button' class='btn-xs btn-dark'>Fri: 6:00pm - 7:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'SAT', '12:00pm - 1:45pm');' type='button' class='btn-xs btn-dark'>Sat: 12:00pm - 1:45pm</button></td>"+
        "<td><button onclick='updateBooking('Dumbo The Elephant', 'SUN', '12:00pm - 1:45pm');' type='button' class='btn-xs btn-dark'>Sun: 12:00pm - 1:45pm</button></td>"+
        "</tr> </table>";
}

function updatePrince() {
    var synopsis = document.getElementsByName('synopsis')[0];
    synopsis.innerHTML = '<h2>The Happy Prince (R)</h2>';

    var synopsisDesc = document.getElementsByClassName('synopsis-description')[0];
    synopsisDesc.innerHTML = "The Happy Prince, the title taken from a Wilde childrens'<br/>" 
                    + "story about suffering aand transcendence, concerns the author's<br/>"
                    + "last days of exile in Europe. Strangers offer kindnesses that help<br/>" 
                    + "ease the painful rejection of audiences and friends who once adored him.";

    var synopsisTrailer = document.getElementsByClassName('synopsis-trailer')[0];
    synopsisTrailer.innerHTML = "<video width='400' controls> <source src='media/prince-trailer.mp4'> </video>";

    var synopsisButtons = document.getElementsByClassName('synopsis-booking-buttons')[0];
    synopsisButtons.innerHTML = "<table><tr>"+
        "<td><button type='button' class='btn-xs btn-dark'>Mon: --:--</button></td>"+
        "<td><button type='button' class='btn-xs btn-dark'>Tue: --:--</button></td>"+
        "<td><button onclick='updateBooking('The Happy Prince', 'WED', '12:00pm - 2:30am');' type='button' class='btn-xs btn-dark'>Wed: 12:00pm - 2:30am</button></td>"+
        "<td><button onclick='updateBooking('The Happy Prince', 'THU', '12:00pm - 2:30am');' type='button' class='btn-xs btn-dark'>Thu: 12:00pm - 2:30am</button></td>"+
        "<td><button onclick='updateBooking('The Happy Prince', 'FRI', '12:00pm - 2:30am');' type='button' class='btn-xs btn-dark'>Fri: 12:00pm - 2:30am</button></td>"+
        "<td><button onclick='updateBooking('The Happy Prince', 'SAT', '9:00pm - 11:30pm');' type='button' class='btn-xs btn-dark'>Sat: 9:00pm - 11:30pm</button></td>"+
        "<td><button onclick='updateBooking('The Happy Prince', 'SUN', '9:00pm - 11:30pm');' type='button' class='btn-xs btn-dark'>Sun: 9:00pm - 11:30pm</button></td>"+
        "</tr> </table>";
}