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

//------------------------------------Slide Show JS/JQuery - Karim159773 & Ayah153509 ------------------------------
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

function showNewsletter(){
	$("#BottomFordPlacement").html('<form id = "BottomFormID" action="FormsPHP.php" method="post" target="votar"><div class="BottomFormContainer"><h2>Subscribe to our Newsletter</h2><p>Its totally free!</p></div><div class="BottomFormContainer" style="background-color:white"><input type="text" oninvalid="this.setCustomValidity(\'Please Enter valid Name\') oninput="setCustomValidity(\'\')" class = "buttn" placeholder="Name" id="NewsName" name="NewsletterName" required><input type="email" oninvalid="this.setCustomValidity(\'Please Enter valid email\') oninput="setCustomValidity(\'\') class = "buttn" placeholder="Email address" id="NewsEmail" name="NewsletterMail" required><label><input type="checkbox" checked="checked" name="NewsletterDaily"> Daily Newsletter</label></div><div class="BottomFormContainer"><input type="submit" class="buttn" name="NewsletterSubmit" value="Subscribe"></div></form>');
}

$('#SignUpFormID').submit(function() {
    var $Username = $("#SignUpUsername").val().toLowerCase();
    var $Password = $("#SignUpPsw").val();
    var $index = jQuery.inArray($Username, $Accounts);


    if ($index !== -1) {
        $("#SignUpFormID .Error").html("Username already in use.");
		return false;
    }
    else if ($Password !== $("#SignUpRepPsw").val()) {
        $("#SignUpFormID .Error").html("The password does not match.");
		return false;
    }
    else {
        alert("Done!");

        $Accounts.push($Username);
        $Psws.push($Password);
        $('#SignUpModalID').css("display", "none");
        $("body").css("overflow", "auto");
    }
    return true;
});

function Logout(){
	var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
	document.location.reload(true);
	
}
//------------------------------------Modals JS/Jquery - Karim159773 & Ayah153509 ------------------------------

var modal = document.getElementById('SignUpModalID');
var modal2 = document.getElementById('LoginModalID');
var VDModal = document.getElementById("ViewDetailsModalID");
var UAModal = document.getElementById("UserAdminAccessID");
var CMModal = document.getElementById("CateringModalID");


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
    else if (event.target === CMModal) {
        CMModal.style.display = "none";
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
        else if ($("#CateringModalID")[0]) {
            if ($('#CateringModalID').css("display") === "block") {

                $('#CateringModalID').fadeOut(600);
                $("body").css("overflow", "auto");
            }
        }
		else if ($("#GuestModal")[0]) {
            if ($('#GuestModal').css("display") === "block") {

                $('#GuestModal').fadeOut(600);
                $("body").css("overflow", "auto");
            }
        }
		else if ($("#ConfirmModalID")[0]) {
            if ($('#ConfirmModalID').css("display") === "block") {

                $('#ConfirmModalID').fadeOut(600);
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
		
		$("input[name=CurrencyVoucher]").change(function(){
			
			if($("input[name=CurrencyVoucher]").val() === "Group3")
				var $totalV = parseInt($("#TotalV").val());
				$("#TotalV").html($totalV);
		});
    }



    
}); 
//---------------Subscription box animation- Karim159773 --------
    $('#BottomFormID').submit(function() {
        $('#BottomFormID').slideUp();
        return true;
    });
//----------------Catering - Habiba163502 ---------------------------
function ModalCatering() {
    document.getElementById('CateringModalID').style.display = "block";
    document.body.style.overflow = "hidden";
}

/*----------------Venues- Ayah153509 --------------------*/

function Modal() {
    document.getElementById('ViewDetailsModalID').style.display = "block";
    document.body.style.overflow = "hidden";
}

/*----------------Venues- Ayah153509 --------------------*/
var lowerRange, UpperRange;

function Modal(x, y, Name) {
    document.getElementById('ViewDetailsModalID').style.display = "block";
	document.getElementById('VenName').value = Name;
    document.body.style.overflow = "hidden";
    lowerRange = x;
    UpperRange = y;
}

function timerFunction() {
    document.getElementById('ViewDetailsModalID').style.display = "none";
}

function FormValidation() {
    var guests = document.forms["VenueForm"]["VenueGuests"].value;
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
        return false;
    }
    //Need to select one of the radio buttons associated with time slot.
    else if (document.getElementById("t1").checked == false && document.getElementById("t2").checked == false) {
        alert("Please select at least one time slot! ");
		return false;
    }
    else if (guests < 0) {
        alert("Guests number cannot be negative!!");
        return false;
    }
    else if (isNaN(guests)) {
        alert("Guests number cannot contain text!");
        return false;
    }
    else if (guests < lowerRange || guests > UpperRange) {
        alert("Venue does not accpet this number! Guests Range from " + lowerRange + " - " + UpperRange);
		return false;
    }
    totalPrice += guests * 50;
    if (slot2.checked) {
        totalPrice += 1000;
    }
    //document.getElementById("price").removeAttribute('readonly');
    document.getElementById("price").setAttribute('value', totalPrice);
    //document.getElementById("price").readOnly = true;
    if (flag == true) {
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
    if (confirm("Confirm Purchase?")) {
		return true;
    }
    else {
        alert("You cancelled the purchase.");
		return false;
    }
}
/*----------------Photography- Anas154084 --------------------*/
if ($(".AhmedPics")[0]) {
    var PicIndex = [1, 1, 1, 1];
    var photographerID = ["AhmedPics", "KarimPics", "ShiblPics", "BullseyePics"];
    showPics(1, 0);
    showPics(1, 1);
    showPics(1, 2);
    showPics(1, 3);
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
/*----------------Guests - Anas154084 ---------------------*/

function resetForm() { //Clears all the form fields
    $("#Name").val("");
    $("#PhoneNum").val("");
    $("#email").val("");
    $("#relationship").val("");
    $("#table-num").val("");
}
$(document).ready(function() {
		$("#StartGuestbttn").click(function() { //Show the guest form
		resetForm();
		$('#GuestModal').css("display", 'block');
		$('body').css('overflow', 'hidden');
	});
});
function confirmModal(value){
document.getElementById("ConfirmModalID").style.display = "block";
document.body.style.overflow = "hidden";
var delbtn = document.getElementById("confirmDelete");
delbtn.setAttribute("value", value);
}
function confirmBookingModal(value){
document.getElementById("ConfirmBookingID").style.display = "block";
document.body.style.overflow = "hidden";
var bookbtn = document.getElementById("confirmBooking");
bookbtn.setAttribute("value", value);
}