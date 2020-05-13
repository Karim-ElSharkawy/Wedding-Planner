//------------------------------------Navigation Bar JS - Karim159773 ------------------------------
function NavigationResponse() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    }
    else {
        x.className = "topnav";
    }
}

//------------------------------------Slide Show JS/JQuery - Karim159773 ------------------------------
// Check if Slideshow is avaliable in HTML body. if not dont call function
if ($(".mySlides")[0]) {
    var slideIndex = 0;
    showSlides();
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2500); // Change image every 2 seconds
}
//-----------------------------------Login/Sign-up Account Related JS/JQ- Karim159773 ----------------

var $Accounts = ["karim159773"];
var $Psws = ["123"];
var $Admins = ["Ad"];
var $AdminPsw = ["Ad"];

function loadData(Name, Pswd){
	$Accounts.push(Name.toLowerCase());
	$Psws.push(Pswd);
}
function loadAdmin(Admin, psw){
	$Admins.push(Admin.toLowerCase());
	$AdminPsw.push(psw);
}

$("#LoginFormID").submit(function() {
    var $Username = $("#LoginUsername").val();
    var $index = jQuery.inArray($Username.toLowerCase(), $Accounts);
	var $indexAdmin = jQuery.inArray($Username.toLowerCase(), $Admins);

    if ($index === -1 && $indexAdmin === -1) {
        $("#LoginFormID .Error").html("Username does not exist");
		return false;
    }
    else if ($Psws[$index] === $("#LoginPsw").val()) {
		
		alert("Welcome, ".concat($Username));
        $('#LoginModalID').css("display", "none");
        $("body").css("overflow", "auto");
		
		//$("#RegistrationButtons").html("<form id=\"LogoutForm\" action=\"FormsPHP.php\" method=\"post\"><input type=\"submit\" id=\"LogoutIcon\" name=\"LogoutSubmit\" value=\".\"> </form> <div id='User'>".concat($Username, "<i class='down'></i></div> <img src='images/home/UserImage.png' id='Avatar' alt='Avatar'>"));
		
		return true;
	}
	else if ($AdminPsw[$indexAdmin] === $("#LoginPsw").val()){
		
		var url = "admin/home.html";
		$(location).attr('href',url);
		return true;
	}
    else {
		$("#LoginFormID .Error").html("Wrong Username/Password");
		return false;
    }
	
    return false;
});

$('#SignUpFormID').submit(function() {
    var $Username = $("#SignUpUsername").val().toLowerCase();
    var $Password = $("#SignUpPsw").val();
    var $index = jQuery.inArray($Username, $Accounts);


    if ($index !== -1) {
        $("#SignUpFormID .Error").html("Username already in use.");

    }
    else if ($Password !== $("#SignUpRepPsw").val()) {
        $("#SignUpFormID .Error").html("The password does not match.");

    }
    else {
        alert("Done!");

        $Accounts.push($Username);
        $Psws.push($Password);
        $('#SignUpModalID').css("display", "none");
        $("body").css("overflow", "auto");
    }
    return false;
});
//------------------------------------Modals JS/Jquery - Karim159773 & Ayah153509 ------------------------------

var modal = document.getElementById('SignUpModalID');
var modal2 = document.getElementById('LoginModalID');
var VDModal = document.getElementById("ViewDetailsModalID");
var UAModal = document.getElementById("UserAdminAccessID");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
    else if (event.target === modal2) {
        modal2.style.display = "none";
        document.body.style.overflow = "auto";
    }
    else if (event.target === VDModal) {
        VDModal.style.display = "none";
        document.body.style.overflow = "auto";
    }
    else if (event.target === UAModal) {
        UAModal.style.display = "none";
        document.body.style.overflow = "auto";
    }
}



$(document).ready(function() {
    $(".viewdetails").click(function() {
        var $nex = $(this).siblings(".VDetails");

        if ($nex.css("visibility").toLowerCase() === "hidden") {
            $nex.css("visibility", "visible");
        }
        else {
            $nex.css("visibility", "hidden");
        }
    });

    //hide Scroll bar (using overflow) when modal is displayed, otherwise keep it shown.
    $("#SignUp").click(function() {
        $('#SignUpModalID').css("display", 'block');
        $('body').css('overflow', 'hidden');
    });

    $("#Login").click(function() {
        $('#LoginModalID').css("display", 'block');
        $('body').css('overflow', 'hidden');
    });

    $(".cancelbtn, .close, #ContinueAsUser").click(function() {
        if ($("#SignUpModalID").css("display") === "block") {
            $('#SignUpModalID').fadeOut(600);
            $("body").css("overflow", "auto");
        }
        else if ($("#LoginModalID").css("display") === "block") {
            $('#LoginModalID').fadeOut(600);
            $("body").css("overflow", "auto");
        }
        else if ($("#ViewDetailsModalID")[0]) {

            if ($("#ViewDetailsModalID").css("display") === "block") {

                $('#ViewDetailsModalID').fadeOut(600);
                $("body").css("overflow", "auto");
            }
        }
        else if ($("#UserAdminAccessID")[0]) {
            if ($('#UserAdminAccessID').css("display") === "block") {

                $('#UserAdminAccessID').fadeOut(600);
                $("body").css("overflow", "auto");
            }
        }
    });

    //--------------------Access Modal for home page(User or Admin)- Karim159773 ----------------------
    $.fn.AccessModal = function() {
        document.getElementById('UserAdminAccessID').style.display = "block";

    }

    if ($("#UserAdminAccessID")[0]) {
        $.fn.AccessModal();
    };
    //------------ Budget Change - Karim159773 --------------

    if ($("input[name=currencyIN]")[0]) {

        $("input[name=currencyIN]").change(function() {
            var $value = 0;
            var $budget = parseInt($("input[name=currencyIN]").val());
            $('.Value').each(function() {
                $value += parseInt($(this).html().replace(",", ""));
            });

            $("input[name=TotalOut]").val($value);
            var $Remain = $budget - $value;
            $("input[name=RemainingOut]").val($Remain);
            var $RemainPerc = ($value / $budget) * 100;

            if ($RemainPerc < 0 || !(isFinite($RemainPerc)))
                $RemainPerc = 0;
            else if ($RemainPerc > 100)
                $RemainPerc = 100;
            $("#Progressbar div").css("width", $RemainPerc + "%");
        });
    }



    //---------------Subscription box animation- Karim159773 --------
    $('#NewsLetterID').submit(function() {
        $('#NewsLetterID').slideUp();
        return false;
    });
});



/*----------------Venues- Ayah153509 --------------------*/

function Modal() {
    document.getElementById('ViewDetailsModalID').style.display = "block";
    document.body.style.overflow = "hidden";
}

/*----------------Venues- Ayah153509 --------------------*/
var lowerRange, UpperRange;
function Modal(x,y)
{
	document.getElementById('ViewDetailsModalID').style.display = "block";
	document.body.style.overflow = "hidden";
	lowerRange = x;
	UpperRange = y;
}
function timerFunction() {
    document.getElementById('ViewDetailsModalID').style.display = "none";
}

function FormValidation() {
    var guests = document.forms["VenueForm"]["guests"].value;
    var slot2 = document.getElementById("t2");
    var totalPrice = 0;
    var flag = true;
    //Date Validation. Client has to select a date that have not already passed.
    var today = new Date();
    var dd = parseInt(today.getDate());
    var mm = parseInt(today.getMonth());
    var yyyy = parseInt(today.getFullYear());
    var formsDate = document.getElementById("date").value;
    var day = parseInt(formsDate.charAt(8) + formsDate.charAt(9));
    var month = parseInt(formsDate.charAt(5) + formsDate.charAt(6));
    var year = parseInt(formsDate.charAt(0) + formsDate.charAt(1) + formsDate.charAt(2) + formsDate.charAt(3));
    if (day < dd || month < mm || year < yyyy) {
        alert("Invalid date entry");
        flag = false;
        return false;
    }
    //Need to select one of the radio buttons associated with time slot.
    if (document.getElementById("t1").checked == false && document.getElementById("t2").checked == false) {
        alert("Please select at least one time slot! ");
        flag = false;
    }
    if (guests < 0) {
        alert("Guests number cannot be negative!!");
        flag = false;
        return false;
    }
    if (isNaN(guests)) {
        alert("Guests number cannot contain text!");
        flag = false;
        return false;
    }
    if (guests < lowerRange || guests > UpperRange) {
        alert("Venue does not accpet this number!");
        flag = false;
    }
    totalPrice += guests * 50;
    if (slot2.checked) {
        totalPrice += 1000;
    }
    //document.getElementById("price").removeAttribute('readonly');
    document.getElementById("price").setAttribute('value', totalPrice);
    //document.getElementById("price").readOnly = true;
    if (flag == true) {
        alert("Your budget page has been updated.");
        confirm("Thank you for choosing Wedding Recipe.");
        setTimeout(timerFunction, 3000);
    }
}

/*---------------------FlowersPage- Ayah153509 ----------------------*/
function big(x) {
    x.style.width = "100%";
    x.style.height = "55%";
}

function normal(x) {
    x.style.width = "100%";
    x.style.height = "50%";
}


function Purchase() {
    if (confirm("Confirm purchase to be added to your Budget's page")) {
        alert("Purchase Confirmed! Added to your Budget's page.");
    }
    else {
        alert("You cancelled the purchase.");
    }
}
/*----------------Photography- Anas154084--------------------*/

var PicIndex = [1, 1, 1];
var photographerID = ["AhmedPics", "KarimPics", "ShiblPics"];

if ($(".photography")[0]) {

    showPics(1, 0);
    showPics(1, 1);
    showPics(1, 2);
}


function plusPics(n, ID) {
    showPics(PicIndex[ID] += n, ID);
}

function showPics(n, ID) {
    var j;
    var pics = document.getElementsByClassName(photographerID[ID]);

    if (n > pics.length) {
        PicIndex[ID] = 1
    }
    if (n < 1) {
        PicIndex[ID] = pics.length
    }
    for (j = 0; j < pics.length; j++) {
        pics[j].style.display = "none";
    }

    pics[PicIndex[ID] - 1].style.display = "block";
}




/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}